<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Multi_image;
use Illuminate\Http\Request;

class ContactController extends Controller {
    function contactPage() {
        $multi_image = Multi_image::where( 'image_type', 'about' )->limit( 6 )->get();
        return view( 'frontend.contact.contact_me', compact( 'multi_image' ) );
    }
    function contactUs( Request $request ) {
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
