<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller {
    function allTestimonial() {
        $testimonals = Testimonial::latest()->get();
        return view( 'admin.testimonial.all_testimonial', compact( 'testimonals' ) );
    }
    function addTestimonial() {
        return view( 'admin.testimonial.add_testimonial' );
    }
    function storeTestimonial( Request $request ) {
        Testimonial::insert( [
            'user'     => $request->user,
            'feedback' => $request->feedback,
        ] );

        $notification = [
            'message'    => "Testimonial Added Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.testimonial' )->with( $notification );
    }
    function editTestimonial( Request $request, $id ) {
        $testimonal = Testimonial::findOrFail( $id );
        return view( 'admin.testimonial.edit_testimonial', compact( 'testimonal' ) );
    }
    function updateTestimonial( Request $request, $id ) {
        Testimonial::findOrFail( $id )->update( [
            'user'     => $request->user,
            'feedback' => $request->feedback,
        ] );
        $notification = [
            'message'    => "Testimonial Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.testimonial' )->with( $notification );
    }
    function deleteTestimonial( Request $request ) {
        Testimonial::findOrFail( $request->id )->delete();
        $notification = [
            'message'    => "Testimonial Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.testimonial' )->with( $notification );
    }
}
