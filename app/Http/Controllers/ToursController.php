<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\AddTourRequest;

class ToursController extends Controller
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
     * @param AddTourRequest $createRequest
     */
    public function adminAdd(AddTourRequest $createRequest)
    {
        $data = $createRequest->request->all();

        $tour = new Tour();
        $tour->title = $data['title'];
        $tour->description = $data['description'];

        if ($tour->save()) {
            return redirect()->route('tours_list');
        }


    }
}