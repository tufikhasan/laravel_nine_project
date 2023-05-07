<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;

class DemoControllers extends Controller {
    public function AboutPage() {
        return view( 'about' );
    }
    public function ContactPage() {
        return view( 'contact' );
    }
}
