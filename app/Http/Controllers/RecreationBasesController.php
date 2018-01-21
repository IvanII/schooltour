<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RecreationBase;
use App\Models\Tour;
use App\Http\Requests\AddTourRequest;

class RecreationBasesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
     * @param AddTourRequest $createRequest
     */
    public function adminAdd(AddTourRequest $createRequest)
    {
        $data = $createRequest->request->all();

        $tour = new RecreationBase();
        $tour->title = $data['title'];
        $tour->description = $data['description'];

        if ($tour->save()) {
            return redirect()->route('tours_list');
        }


    }
}