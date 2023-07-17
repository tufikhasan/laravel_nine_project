<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller {
    function partnerInfo() {
        $partnerInfo = Partner::findOrFail( 1 );
        return view( 'admin.partner.partner_info', compact( 'partnerInfo' ) );
    }
    function updatePartnerInfo( Request $request ) {
        Partner::findOrFail( $request->id )->update( [
            'title_info'  => $request->title_info,
            'title'       => $request->title,
            'description' => $request->description,
        ] );
        $notification = [
            'message'    => "Partner information Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->back()->with( $notification );
    }
}
