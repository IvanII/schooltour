<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\AddTourRequest;
use App\Http\Requests\UpdateTourRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\FamilyRecreation;
use App\Models\Testimonial;

class TestimonialsController extends Controller
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
        $testimonials = Testimonial::paginate(6);

        return view('admin.testimonials.index', ['testimonials' => $testimonials]);
    }

    /**
     * Return view for create tour
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminCreate()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Return view for edit tour
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminEdit($id)
    {
        return view('admin.testimonials.edit', ['testimonial' => Testimonial::findOrFail($id)]);
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminAdd(AddTourRequest $createRequest)
    {
        $data = $createRequest->request->all();


        $tour = new Testimonial();
        $tour->author = $data['author'];
        $tour->description = $data['description'];


        if ($tour->save()) {

            return redirect()->route('testimonials_list');
        }
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminUpdate(UpdateTourRequest $updateRequest, $id)
    {
        $data = $updateRequest->request->all();

        $tour = Testimonial::findOrFail($id);
        $tour->author = $data['author'];
        $tour->description = $data['description'];

        if ($tour->save()) {
            return redirect()->route('testimonials_list');
        }
    }

    /**
     * @param int $id
     */
    public function adminDestroy($id)
    {
        Testimonial::destroy($id);

        return redirect()->route('testimonials_list');
    }

    public function index()
    {
        $testimonials = Testimonial::paginate(6);

        return view('testimonials.index', ['testimonials' => $testimonials]);
    }

//    public function show($id)
//    {
//        $tour = Testimonial::findOrFail($id);
//
//        return view('family.show', ['tour' => $tour]);
//    }
}