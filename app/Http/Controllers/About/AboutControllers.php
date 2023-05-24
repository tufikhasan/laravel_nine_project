<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\Abouts;
use App\Models\Multi_image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AboutControllers extends Controller {
    function aboutInfo() {
        $aboutData = Abouts::find( 1 );
        return view( 'admin.about.about_info', compact( 'aboutData' ) );
    }
    function updateAbout( Request $request ) {
        $about_id = $request->id;

        if ( $request->file( 'about_image' ) ) {
            $about_info = Abouts::findOrFail( $about_id );
            //delete old image from folder
            if ( $about_info->about_image ) {
                unlink( public_path( 'upload/about/' . $about_info->about_image ) );
            }

            $image = $request->file( 'about_image' );

            $img_nam_gen = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension(); //generateUniqueId.extension
            $image->move( public_path( 'upload/about' ), $img_nam_gen );

            $about_info->update( [
                'title_info'  => $request->title_info,
                'title'       => $request->title,
                'short_title' => $request->short_title,
                'short_desc'  => $request->short_desc,
                'long_desc'   => $request->long_desc,
                'about_image' => $img_nam_gen,
            ] );
            $notification = [
                'message'    => "About information Updated With Image Successfully",
                'alert-type' => 'success',
            ];
            return redirect()->back()->with( $notification );

        } else {
            Abouts::findOrFail( $about_id )->update( [
                'title_info'  => $request->title_info,
                'title'       => $request->title,
                'short_title' => $request->short_title,
                'short_desc'  => $request->short_desc,
                'long_desc'   => $request->long_desc,
            ] );
            $notification = [
                'message'    => "About information Updated Without Image Successfully",
                'alert-type' => 'success',
            ];
            return redirect()->back()->with( $notification );
        }
    }

    function aboutPage() {
        $aboutData = Abouts::find( 1 );
        return view( 'frontend.about.about_page', compact( 'aboutData' ) );
    }

    public function multiImage() {
        return view( 'admin.about.upload_multi' );
    }

    public function storeMultiImage( Request $request ) {
        $multiple_images = $request->file( 'image' );
        foreach ( $multiple_images as $image ) {
            $img_name_gen = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'upload/multi' ), $img_name_gen );
            Multi_image::insert( [
                'image'      => $img_name_gen,
                'created_at' => Carbon::now(),
            ] );
        }
        $notification = [
            'message'    => "Multiple Image Uploaded Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->back()->with( $notification );
    }
}
