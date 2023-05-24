<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeSlides;

class HomeSlideController extends Controller {
    function homeSlide() {
        $homeSlide = HomeSlides::find( 1 );
        return view( 'admin.homeSlides.home_banner', compact( 'homeSlide' ) );
    }
    function homeSlideUpdate() {
        return response()->json( ['message' => 'hello'] );
    }
}
