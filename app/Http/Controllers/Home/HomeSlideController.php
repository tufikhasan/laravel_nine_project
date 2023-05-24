<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlides;
use Illuminate\Http\Request;

class HomeSlideController extends Controller {
    function homeSlide() {
        $homeSlide = HomeSlides::find( 1 );
        return view( 'admin.homeSlides.home_banner', compact( 'homeSlide' ) );
    }
    function homeSlideUpdate( Request $request ) {
        $slide_id = $request->id;

        if ( $request->file( 'home_slide' ) ) {
            $home_sliders = HomeSlides::findOrFail( $slide_id );
            //delete old image from folder
            if ( $home_sliders->home_slide ) {
                unlink( public_path( 'upload/home_slide/' . $home_sliders->home_slide ) );
            }

            $image = $request->file( 'home_slide' );

            $img_nam_gen = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension(); //generateUniqueId.extension
            $image->move( public_path( 'upload/home_slide' ), $img_nam_gen );

            $home_sliders->update( [
                'title'       => $request->title,
                'short_title' => $request->short_title,
                'video_url'   => $request->video_url,
                'home_slide'  => $img_nam_gen,
            ] );
            $notification = [
                'message'    => "Home Slide Updated With Image Successfully",
                'alert-type' => 'success',
            ];
            return redirect()->back()->with( $notification );

        } else {
            HomeSlides::findOrFail( $slide_id )->update( [
                'title'       => $request->title,
                'short_title' => $request->short_title,
                'video_url'   => $request->video_url,
            ] );
            $notification = [
                'message'    => "Home Slide Updated Without Image Successfully",
                'alert-type' => 'success',
            ];
            return redirect()->back()->with( $notification );
        }
    }
}
