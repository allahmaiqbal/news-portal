<?php

namespace Modules\ContactUS\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Modules\ContactUS\Entities\Contact;
use Illuminate\Contracts\Support\Renderable;

class ContactUSController extends Controller
{



    public function sendEmail(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // Create a new Contact instance and save it to the database
        $contact = new Contact($validatedData);
        $contact->save();

        // Send email using Laravel's built-in Mail facade
        Mail::to($request->input('email'))->send(new ContactEmail($validatedData));

        // Return a response
        return response()->json(['message' => 'Email sent successfully.']);
    }

    public function contactPage()

    {
        return view('contactus::contact');
    }
    //Index method
    public function emailList()
    {
        $emails = Contact::latest()->get();
        return view('contactus::mailList', compact('emails'));
    }

    //Show method
    public function emailShow($id)
    {
        $email = Contact::findOrFail($id);
        if (!$email->seen) {
            $email->seen = true;
            $email->save();
        }
        // return $email;
        return view('contactus::mailShow', compact('email'));
    }

    //Destroy method
    public function emailDestroy($id)
    {
        $email = Contact::findOrFail($id);
        $email->delete();
        return redirect()
            ->back()
            ->withSuccess('Email delete successfully.');
    }



    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('contactus::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('contactus::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('contactus::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('contactus::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
