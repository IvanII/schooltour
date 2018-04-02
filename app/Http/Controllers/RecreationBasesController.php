<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RecreationBase;
use App\Models\Tour;
use App\Http\Requests\AddBaseRequest;
use App\Http\Requests\UpdateBaseRequest;
use Intervention\Image\ImageManagerStatic as Image;

class RecreationBasesController extends Controller
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
        $bases = RecreationBase::paginate(10);

        return view('admin.bases.index', ['bases' => $bases]);
    }

    /**
     * Return view for edit base
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminCreate()
    {
        return view('admin.bases.create');
    }

    /**
     * Return view for edit base
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminEdit($id)
    {
        return view('admin.bases.edit', ['base' => RecreationBase::findOrFail($id)]);
    }



    /**
     * @param AddBaseRequest $createRequest
     */
    public function adminAdd(AddBaseRequest $createRequest)
    {
        $data = $createRequest->request->all();

        $file = $createRequest->file();
        $image = Image::make($file['image']);
        $image->resize(340, 225);

        $imageName = time() . $file['image']->getClientOriginalName();

        $base = new RecreationBase();
        $base->title = $data['title'];
        $base->description = $data['description'];
        $base->image = $imageName;

        if ($base->save()) {

            if (!is_dir(public_path('images/uploads/bases/' . $base->id))) {
                mkdir('images/uploads/bases/' . $base->id, 0777);
            }

            $image->save(public_path('images/uploads/bases/' . $base->id . '/' . $imageName));

            return redirect()->route('bases_list');
        }
    }

    /**
     * @param UpdateBaseRequest $createRequest
     */
    public function adminUpdate(UpdateBaseRequest $updateRequest, $id)
    {
        $data = $updateRequest->request->all();
        $file = $updateRequest->file();
        $image = $file['image'] ? Image::make($file['image']) : false;
        $image->resize(340, 225);
        $imageName = time() . $file['image']->getClientOriginalName();

        $base = RecreationBase::findOrFail($id);
        $base->title = $data['title'];
        $base->description = $data['description'];

        $oldImage = $base->image;

        if ($image) {
            $base->image = $imageName;
        }

        if ($base->save()) {

            if ($image) {
                if (!is_dir(public_path('images/uploads/bases/' . $base->id))) {
                    mkdir('images/uploads/bases/' . $base->id, 0777);
                }

                $image->save(public_path('images/uploads/bases/' . $base->id . '/' . $imageName));
            }

            return redirect()->route('bases_list');
        }
    }

    /**
     * @param int $id
     */
    public function adminDestroy($id)
    {
        RecreationBase::destroy($id);

        return redirect()->route('bases_list');
    }

    public function index()
    {
        $bases = RecreationBase::paginate(12);

        return view('bases.index', ['bases' => $bases]);
    }

    public function show($id)
    {
        $base = RecreationBase::findOrFail($id);

        return view('bases.show', ['base' => $base]);
    }
}