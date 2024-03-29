<?php

use App\Http\Controllers\About\AboutControllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\MultiImageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'frontend.index' );
} )->name( 'home.page' );

Route::get( '/dashboard', [DashboardController::class, 'dashboardMethod'] )->middleware( ['auth', 'verified'] )->name( 'dashboard' );

Route::middleware( ['auth'] )->group( function () {

    //Admin Controller
    Route::controller( AdminController::class )->group( function () {
        Route::get( '/admin/logout', 'destroy' )->name( 'admin.logout' );
        Route::get( '/admin/profile', 'Profile' )->name( 'admin.profile' );
        Route::get( '/edit/profile', 'editProfile' )->name( 'edit.profile' );
        Route::post( '/update/profile', 'updateProfile' )->name( 'update.profile' );
        Route::get( '/change/password', 'changePassword' )->name( 'change.password' );
        Route::post( '/change/password', 'updatePassword' )->name( 'update.password' );
    } );

    //Home Slide Controller
    Route::controller( HomeSlideController::class )->group( function () {
        Route::get( '/home/slide', 'homeSlide' )->name( 'home.slide' );
        Route::post( '/home/slide/{id}', 'homeSlideUpdate' )->name( 'update.slide' );
    } );

    //About Slide All route
    Route::controller( AboutControllers::class )->group( function () {
        Route::get( '/about/info', 'aboutInfo' )->name( 'about.info' );
        Route::post( '/update/about/{id}', 'updateAbout' )->name( 'update.about' );
        Route::get( '/about', 'aboutPage' )->name( 'about.page' )->withoutMiddleware( 'auth' );

        Route::get( '/all/skill', 'allSkill' )->name( 'all.skill' );
        Route::get( '/add/skill', 'addSkill' )->name( 'add.skill' );
        Route::post( '/add/skill', 'storeSkill' )->name( 'store.skill' );
        Route::get( '/edit/skill/{id}', 'editSkill' )->name( 'edit.skill' );
        Route::patch( '/edit/skill/{id}', 'updateSkill' )->name( 'update.skill' );
        Route::get( '/delete/skill/{id}', 'deleteSkill' )->name( 'delete.skill' );

        Route::get( '/all/award', 'allAward' )->name( 'all.award' );
        Route::get( '/add/award', 'addAward' )->name( 'add.award' );
        Route::post( '/add/award', 'storeAward' )->name( 'store.award' );
        Route::get( '/edit/award/{id}', 'editAward' )->name( 'edit.award' );
        Route::patch( '/edit/award/{id}', 'updateAward' )->name( 'update.award' );
        Route::get( '/delete/award/{id}', 'deleteAward' )->name( 'delete.award' );

        Route::get( '/all/education', 'allEducation' )->name( 'all.education' );
        Route::get( '/add/education', 'addEducation' )->name( 'add.education' );
        Route::post( '/add/education', 'storeEducation' )->name( 'store.education' );
        Route::get( '/edit/education/{id}', 'editEducation' )->name( 'edit.education' );
        Route::patch( '/edit/education/{id}', 'updateEducation' )->name( 'update.education' );
        Route::get( '/delete/education/{id}', 'deleteEducation' )->name( 'delete.education' );
    } );

    //Multi image All route
    Route::controller( MultiImageController::class )->group( function () {
        Route::get( '/multi/image', 'multiImage' )->name( 'multi.image' );
        Route::post( '/multi/image', 'storeMultiImage' )->name( 'multi.image' );
        Route::get( '/all/multi', 'allMultiImage' )->name( 'all.multi' );

        Route::get( '/multi/image/{id}', 'editMultiImage' )->name( 'edit.multi.image' );
        Route::patch( '/multi/image/{id}', 'updateMultiImage' )->name( 'update.multi.image' );
        Route::get( '/delete/multi/image/{id}', 'deleteMultiImage' )->name( 'delete.multi.image' );

    } );

    //Portfolio all route
    Route::controller( PortfolioController::class )->group( function () {
        Route::get( '/all/portfolios', 'allPortfolio' )->name( 'all.portfolio' );
        Route::get( '/add/portfolio', 'addPortfolio' )->name( 'add.portfolio' );
        Route::post( '/add/portfolio', 'storePortfolio' )->name( 'store.portfolio' );
        Route::get( '/edit/portfolio/{id}', 'editPortfolio' )->name( 'edit.portfolio' );
        Route::patch( '/edit/portfolio/{id}', 'updatePortfolio' )->name( 'update.portfolio' );
        Route::get( '/delete/portfolio/{id}', 'deletePortfolio' )->name( 'delete.portfolio' );
        // Route::delete( '/delete/portfolio/{id}', 'deletePortfolio' )->name( 'delete.portfolio' );
        Route::get( '/portfolio/details/{id}', 'detailsPortfolio' )->name( 'portfolio.details' )->withoutMiddleware( 'auth' );
        Route::get( '/portfolios', 'portfolioPage' )->name( 'portfolio.page' )->withoutMiddleware( 'auth' );
    } );

    //Blog Category all route
    Route::controller( BlogCategoryController::class )->group( function () {
        Route::get( '/all/category', 'allCategory' )->name( 'all.category' );
        Route::get( '/add/category', 'addCategory' )->name( 'add.category' );
        Route::post( '/add/category', 'storeCategory' )->name( 'store.category' );
        Route::get( '/edit/category/{id}', 'editCategory' )->name( 'edit.category' );
        Route::patch( '/edit/category/{id}', 'updateCategory' )->name( 'update.category' );
        Route::get( '/delete/category/{id}', 'deleteCategory' )->name( 'delete.category' );
    } );

    //Blog all route
    Route::controller( BlogController::class )->group( function () {
        Route::get( '/all/blog', 'allBlog' )->name( 'all.blog' );
        Route::get( '/add/blog', 'addBlog' )->name( 'add.blog' );
        Route::post( '/add/blog', 'storeBlog' )->name( 'store.blog' );
        Route::get( '/edit/blog/{id}', 'editBlog' )->name( 'edit.blog' );
        Route::patch( '/edit/blog/{id}', 'updateBlog' )->name( 'update.blog' );
        Route::get( '/delete/blog/{id}', 'deleteBlog' )->name( 'delete.blog' );
        Route::get( '/blog/details/{id}', 'blogDetails' )->name( 'blog.details' )->withoutMiddleware( 'auth' );
        Route::get( '/category/blogs/{id}', 'categoryBlogs' )->name( 'category.blogs' )->withoutMiddleware( 'auth' );
        Route::get( '/blogs', 'blogPage' )->name( 'blog.page' )->withoutMiddleware( 'auth' );
    } );

    //Footer all route
    Route::controller( FooterController::class )->group( function () {
        Route::get( '/footer/setup', 'footerSetup' )->name( 'footer.setup' );
        Route::patch( '/footer/setup/{id}', 'updateFooter' )->name( 'update.footer' );
    } );

    //Contact all route
    Route::controller( ContactController::class )->group( function () {
        Route::get( '/all/contact', 'allContact' )->name( 'all.contact' );
        Route::post( '/contact', 'contactUs' )->name( 'contact.us' )->withoutMiddleware( 'auth' );
        Route::get( '/delete/contact/{id}', 'deleteContact' )->name( 'delete.contact' );
        Route::get( '/contact', 'contactPage' )->name( 'contact.me' )->withoutMiddleware( 'auth' );
    } );

    //Testimonial all route
    Route::controller( TestimonialController::class )->group( function () {
        Route::get( '/all/testimonial', 'allTestimonial' )->name( 'all.testimonial' );
        Route::get( '/add/testimonial', 'addTestimonial' )->name( 'add.testimonial' );
        Route::post( '/add/testimonial', 'storeTestimonial' )->name( 'store.testimonial' );
        Route::get( '/edit/testimonial/{id}', 'editTestimonial' )->name( 'edit.testimonial' );
        Route::patch( '/edit/testimonial/{id}', 'updateTestimonial' )->name( 'update.testimonial' );
        Route::get( '/delete/testimonial/{id}', 'deleteTestimonial' )->name( 'delete.testimonial' );
    } );
    //Testimonial all route
    Route::controller( PartnerController::class )->group( function () {
        Route::get( '/partner', 'partnerInfo' )->name( 'partner.info' );
        Route::patch( '/partner/{id}', 'updatePartnerInfo' )->name( 'update.partnerInfo' );
    } );
    //Testimonial all route
    Route::controller( ServiceController::class )->group( function () {
        Route::get( '/all/services', 'allService' )->name( 'all.service' );
        Route::get( '/add/service', 'addService' )->name( 'add.service' );
        Route::post( '/add/service', 'storeService' )->name( 'store.service' );
        Route::get( '/edit/service/{id}', 'editService' )->name( 'edit.service' );
        Route::patch( '/edit/service/{id}', 'updateService' )->name( 'update.service' );
        Route::get( '/delete/service/{id}', 'deleteService' )->name( 'delete.service' );
    } );

} );

require __DIR__ . '/auth.php';