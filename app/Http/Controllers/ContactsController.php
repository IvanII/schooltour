<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\AddTourRequest;
use App\Http\Requests\UpdateTourRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\FamilyRecreation;
use App\Models\Testimonial;
use App\Http\Requests\UpdateContactRequest;

class ContactsController extends Controller
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
     * Return view for edit tour
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminEdit()
    {
        return view('admin.contacts.edit', ['contact' => Contact::all()->first()]);
    }

    /**
     * @param UpdateContactRequest $createRequest
     */
    public function adminUpdate(UpdateContactRequest $updateRequest)
    {
        $data = $updateRequest->request->all();

        $contact = Contact::all()->first();
        $contact->address = $data['address'];
        $contact->office = $data['office'];
        $contact->working_hours = $data['working_hours'];
        $contact->phone = $data['phone'];
        $contact->email = $data['email'];

        if ($contact->save()) {

            return redirect('/admin');
        }
    }

    public function show()
    {
        $contact = Contact::all();

        return view('contacts.show', ['contact' => $contact->first()]);
    }
}