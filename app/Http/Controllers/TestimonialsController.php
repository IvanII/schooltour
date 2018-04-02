<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Http\Requests\AddTourRequest;
use App\Http\Requests\UpdateTourRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\FamilyRecreation;
use App\Models\Testimonial;
use App\Http\Requests\AddTestimonialRequest;

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
    public function adminAdd(AddTestimonialRequest $createRequest)
    {
        $data = $createRequest->request->all();
        $file = $createRequest->file();
        $image = $file['image'] ? Image::make($file['image']) : false;

        $imageName = $file['image'] ? time() . $file['image']->getClientOriginalName() : null;


        $testimonial = new Testimonial();
        $testimonial->author = $data['author'];
        $testimonial->description = $data['description'];

        if ($image) {
            $testimonial->image = $imageName;
        }

        if ($testimonial->save()) {

            if ($image) {
                if (!is_dir(public_path('images/uploads/testimonials/' . $testimonial->id))) {
                    mkdir('images/uploads/testimonials/' . $testimonial->id, 0777);
                }
                $image->save(public_path('images/uploads/testimonials/' . $testimonial->id . '/' . $imageName));
            }

            return redirect()->route('testimonials_list');
        }
    }

    /**
     * @param AddTourRequest $createRequest
     */
    public function adminUpdate(UpdateTourRequest $updateRequest, $id)
    {
        $data = $updateRequest->request->all();
        $file = $updateRequest->file();
        $image = $file['image'] ? Image::make($file['image']) : false;

        $imageName = $file['image'] ? time() . $file['image']->getClientOriginalName() : null;


        $testimonial = Testimonial::findOrFail($id);
        $testimonial->author = $data['author'];
        $testimonial->description = $data['description'];
        $oldImage = $testimonial->image;

        if ($image) {
            $testimonial->image = $imageName;
        }

        if ($testimonial->save()) {

            if ($image) {
                if (!is_dir(public_path('images/uploads/testimonials/' . $testimonial->id))) {
                    mkdir('images/uploads/testimonials/' . $testimonial->id, 0777);
                }
                $image->save(public_path('images/uploads/testimonials/' . $testimonial->id . '/' . $imageName));
            }

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
        $testimonials = Testimonial::paginate(5);

        return view('testimonials.index', ['testimonials' => $testimonials]);
    }

    public function show($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('testimonials.show', ['testimonial' => $testimonial]);
    }
}