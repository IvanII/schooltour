<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RecreationBase;
use App\Models\Tour;
use App\Http\Requests\AddBaseRequest;
use App\Http\Requests\UpdateBaseRequest;

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
     * @param AddBaseRequest $createRequest
     */
    public function adminAdd(AddBaseRequest $createRequest)
    {
        $data = $createRequest->request->all();

        $tour = new RecreationBase();
        $tour->title = $data['title'];
        $tour->description = $data['description'];

        if ($tour->save()) {
            return redirect()->route('bases_list');
        }
    }

    /**
     * @param UpdateBaseRequest $createRequest
     */
    public function adminUpdate(UpdateBaseRequest $updateRequest, $id)
    {
        $data = $updateRequest->request->all();

        $tour = RecreationBase::findOrFail($id);
        $tour->title = $data['title'];
        $tour->description = $data['description'];

        if ($tour->save()) {
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
        $bases = RecreationBase::paginate(10);

        return view('bases.index', ['bases' => $bases]);
    }

    public function show($id)
    {
        $base = RecreationBase::findOrFail($id);

        return view('bases.show', ['base' => $base]);
    }
}