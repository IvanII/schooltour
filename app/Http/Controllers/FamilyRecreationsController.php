<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\AddTourRequest;
use App\Http\Requests\UpdateTourRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\FamilyRecreation;
use App\Http\Requests\AddFamilyRecreationRequest;
use App\Http\Requests\UpdateFamilyRecreationRequest;

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
    public function adminAdd(AddFamilyRecreationRequest $createRequest)
    {
        $data = $createRequest->request->all();
        $file = $createRequest->file();
        $image = Image::make($file['image']);
        $image->resize(340, 225);

        $fileName = time() . $file['file_description']->getClientOriginalName();
        $imageName = time() . $file['image']->getClientOriginalName();

        $family = new FamilyRecreation();
        $family->title = $data['title'];
        $family->description = $data['description'];
        $family->image = $imageName;
        $family->file_description = $fileName;


        if ($family->save()) {

            if (!is_dir(public_path('images/uploads/family/' . $family->id))) {
                mkdir('images/uploads/family/' . $family->id, 0777);
            }

            $image->save(public_path('images/uploads/family/' . $family->id . '/' . $imageName));

            if (!is_dir(public_path('files/uploads/family/' . $family->id))) {
                mkdir('files/uploads/family/' . $family->id, 0777);
            }

            $file['file_description']->move(public_path('files/uploads/tours/' . $family->id), $fileName);

            return redirect()->route('family_list');
        }
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminUpdate(UpdateFamilyRecreationRequest $updateRequest, $id)
    {
        $data = $updateRequest->request->all();
        $file = $updateRequest->file();
        $image = $file['image'] ? Image::make($file['image']) : false;
        $image->resize(340, 225);
        $imageName = $file['image'] ? time() . $file['image']->getClientOriginalName() : null;


        $family = FamilyRecreation::findOrFail($id);
        $family->title = $data['title'];
        $family->description = $data['description'];

        if ($image) {
            $family->image = $imageName;
        }

        $oldImage = $family->image;

        if ($family->save()) {

            if ($image) {
                if (!is_dir(public_path('images/uploads/family/' . $family->id))) {
                    mkdir('images/uploads/family/' . $family->id, 0777);
                }
                $image->save(public_path('images/uploads/family/' . $family->id . '/' . $imageName));
            }

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
        $family = FamilyRecreation::paginate(12);

        return view('family.index', ['family' => $family]);
    }

    public function show($id)
    {
        $family = FamilyRecreation::findOrFail($id);

        return view('family.show', ['family' => $family]);
    }
}