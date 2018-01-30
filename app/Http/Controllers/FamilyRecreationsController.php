<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\AddTourRequest;
use App\Http\Requests\UpdateTourRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\FamilyRecreation;

class FamilyRecreationsController extends Controller
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
        $family = FamilyRecreation::paginate(10);

        return view('admin.family.index', ['family' => $family]);
    }

    /**
     * Return view for create tour
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminCreate()
    {
        return view('admin.family.create');
    }

    /**
     * Return view for edit tour
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminEdit($id)
    {
        return view('admin.family.edit', ['family' => FamilyRecreation::findOrFail($id)]);
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminAdd(AddTourRequest $createRequest)
    {
        $data = $createRequest->request->all();
//        $file = $createRequest->file();
//        $image = Image::make($file['image']);
//        $image->resize(246, 163);
//
//        $fileName = time() . $file['file_description']->getClientOriginalName();
//        $imageName = time() . $file['image']->getClientOriginalName();

        $family = new FamilyRecreation();
        $family->title = $data['title'];
        $family->description = $data['description'];


        if ($family->save()) {

//            if (!is_dir(public_path('images/uploads/family/' . $tour->id))) {
//                mkdir('images/uploads/family/' . $tour->id, 0777);
//            }
//
//            $image->save(public_path('images/uploads/family/' . $tour->id . '/' . $imageName));
//
//            if (!is_dir(public_path('files/uploads/family/' . $tour->id))) {
//                mkdir('files/uploads/family/' . $tour->id, 0777);
//            }
//
//            $file['file_description']->move(public_path('files/uploads/tours/' . $tour->id), $fileName);

            return redirect()->route('family_list');
        }
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminUpdate(UpdateTourRequest $updateRequest, $id)
    {
        $data = $updateRequest->request->all();

        $family = FamilyRecreation::findOrFail($id);
        $family->title = $data['title'];
        $family->description = $data['description'];

        if ($family->save()) {
            return redirect()->route('family_list');
        }
    }

    /**
     * @param int $id
     */
    public function adminDestroy($id)
    {
        FamilyRecreation::destroy($id);

        return redirect()->route('family_list');
    }

    public function index()
    {
        $family = FamilyRecreation::paginate(6);

        return view('family.index', ['family' => $family]);
    }

    public function show($id)
    {
        $family = FamilyRecreation::findOrFail($id);

        return view('family.show', ['family' => $family]);
    }
}