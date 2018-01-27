<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\AddTourRequest;
use App\Http\Requests\UpdateTourRequest;
use Intervention\Image\ImageManagerStatic as Image;

class ToursController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Return all tours from database
     */
    public function adminIndex()
    {
        $tours = Tour::paginate(10);

        return view('admin.tours.index', ['tours' => $tours]);
    }

    /**
     * Return view for create tour
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminCreate()
    {
        return view('admin.tours.create');
    }

    /**
     * Return view for edit tour
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminEdit($id)
    {
        return view('admin.tours.edit', ['tour' => Tour::findOrFail($id)]);
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminAdd(AddTourRequest $createRequest)
    {
        $data = $createRequest->request->all();
        $file = $createRequest->file();
        $image = Image::make($file['image']);
        $image->resize(246, 163);

        $fileName = time() . $file['file_description']->getClientOriginalName();
        $imageName = time() . $file['image']->getClientOriginalName();

        $tour = new Tour();
        $tour->title = $data['title'];
        $tour->description = $data['description'];
        $tour->image = $imageName;
        $tour->file_description = $fileName;

        if ($tour->save()) {

            if (!is_dir(public_path('images/uploads/tours/' . $tour->id))) {
                mkdir('images/uploads/tours/' . $tour->id, 0777);
            }

            $image->save(public_path('images/uploads/tours/' . $tour->id . '/' . $imageName));

            if (!is_dir(public_path('files/uploads/tours/' . $tour->id))) {
                mkdir('files/uploads/tours/' . $tour->id, 0777);
            }

            $file['file_description']->move(public_path('files/uploads/tours/' . $tour->id), $fileName);

            return redirect()->route('tours_list');
        }
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminUpdate(UpdateTourRequest $updateRequest, $id)
    {
        $data = $updateRequest->request->all();

        $tour = Tour::findOrFail($id);
        $tour->title = $data['title'];
        $tour->description = $data['description'];

        if ($tour->save()) {
            return redirect()->route('tours_list');
        }
    }

    /**
     * @param int $id
     */
    public function adminDestroy($id)
    {
        Tour::destroy($id);

        return redirect()->route('tours_list');
    }

    public function index()
    {
        $tours = Tour::paginate(6);

        return view('tours.index', ['tours' => $tours]);
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);

        return view('tours.show', ['tour' => $tour]);
    }
}