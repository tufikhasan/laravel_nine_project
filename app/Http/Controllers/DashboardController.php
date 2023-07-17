<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use App\Models\Contact;
use App\Models\portfolios;
use App\Models\Service;
use App\Models\User;

class DashboardController extends Controller {
    function dashboardMethod() {
        $totalUsers = User::count();
        $totalPortfolio = portfolios::count();
        $totalBlog = Blogs::count();
        $totalService = Service::count();
        $contacts = Contact::latest()->get();
        return view( 'admin.index', compact( 'totalUsers', 'totalPortfolio', 'totalBlog', 'totalService', 'contacts' ) );
    }
}
