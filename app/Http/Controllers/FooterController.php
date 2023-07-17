<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller {
    function footerSetup() {
        $footer = Footer::find( 1 );
        return view( 'admin.footer_page_setup', compact( 'footer' ) );
    }
    function updateFooter( Request $request, $id ) {
        Footer::findOrFail( $id )->update( [
            'number'             => $request->number,
            'short_description'  => $request->short_description,
            'country'            => $request->country,
            'address'            => $request->address,
            'email'              => $request->email,
            'social_title'       => $request->social_title,
            'social_description' => $request->social_description,
            'facebook'           => $request->facebook,
            'twitter'            => $request->twitter,
            'linkedIn'           => $request->linkedIn,
            'copyright'          => $request->copyright,
        ] );
        $notification = [
            'message'    => "Footer Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'footer.setup' )->with( $notification );
    }
}
