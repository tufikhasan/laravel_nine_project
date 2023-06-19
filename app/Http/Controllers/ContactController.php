<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {
    function contactPage() {
        return view( 'frontend.contact.contact_me' );
    }
    function contactUs( Request $request ) {
        //request validation
        $request->validate( [
            'name'    => 'required|string',
            'email'   => 'required|email',
            'subject' => 'required|string',
            'budget'  => 'required',
            'message' => 'required|string',
        ], [
            'name.required'    => 'Name is required',
            'email.required'   => 'Email is required',
            'email.email'      => 'Email is not Valid',
            'subject.required' => 'Subject is required',
            'budget.required'  => 'Budget is required',
            'message.required' => 'Message is required',
        ] );

        Contact::insert( [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'budget'  => $request->budget,
            'message' => $request->message,
        ] );

        $notification = [
            'message'    => "Your Message Submited Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->back()->with( $notification );
    }

    function allContact() {
        $contacts = Contact::latest()->get();
        return view( 'admin.all_contact', compact( 'contacts' ) );
    }
    function deleteContact( Request $request, $id ) {
        Contact::findOrFail( $id )->delete();
        $notification = [
            'message'    => "Contact Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->back()->with( $notification );
    }
}
