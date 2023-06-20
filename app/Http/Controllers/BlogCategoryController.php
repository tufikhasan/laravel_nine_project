<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller {
    function allCategory() {
        $blogCategories = BlogCategory::latest()->get();
        return view( 'admin.blogCategory.all_blog_category', compact( 'blogCategories' ) );
    }
    function addCategory() {
        return view( 'admin.blogCategory.add_blog_category' );
    }
    function storeCategory( Request $request ) {
        BlogCategory::insert( ['blog_category' => $request->blog_category] );

        $notification = [
            'message'    => "Blog Category Added Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.category' )->with( $notification );
    }

    function editCategory( Request $request, $id ) {
        $category = BlogCategory::findOrFail( $id );
        return view( 'admin.blogCategory.edit_blog_category', compact( 'category' ) );
    }
    function updateCategory( Request $request, $id ) {
        $category = BlogCategory::findOrFail( $id );

        $category->update( ['blog_category' => $request->blog_category] );

        $notification = [
            'message'    => "Blog Category Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.category' )->with( $notification );
    }
    function deleteCategory( Request $request, $id ) {
        BlogCategory::findOrFail( $id )->delete();

        $notification = [
            'message'    => "Blog Category Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.category' )->with( $notification );
    }
}
