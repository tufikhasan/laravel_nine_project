<?php

namespace App\Http\Controllers;

use App\Models\Multi_image;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MultiImageController extends Controller {
    public function multiImage() {
        return view( 'admin.multi_images.upload_multi' );
    }
    public function storeMultiImage( Request $request ) {
        $multiple_images = $request->file( 'image' );
        foreach ( $multiple_images as $image ) {
            $img_name_gen = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'upload/multi' ), $img_name_gen );
            Multi_image::insert( [
                'image_type' => $request->image_type,
                'image'      => $img_name_gen,
                'created_at' => Carbon::now(),
            ] );
        }
        $notification = [
            'message'    => "Multiple Image Uploaded Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.multi' )->with( $notification );
    }
    public function allMultiImage() {
        $allImages = Multi_image::all();
        return view( 'admin.multi_images.all_multi_images', compact( 'allImages' ) );
    }

    public function editMultiImage( Request $request, $id ) {
        $editMultiImage = Multi_image::findOrFail( $id );
        return view( 'admin.multi_images.edit_multi_images', compact( 'editMultiImage' ) );
    }
    public function updateMultiImage( Request $request, $id ) {
        $data = Multi_image::findOrFail( $id );

        if ( $request->file( 'image' ) ) {
            if ( $data->image ) {
                unlink( str_replace( '\\', '/', public_path( 'upload/multi/' . $data->image ) ) );
            }
            $image = $request->file( 'image' );
            $img_name_gen = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'upload/multi' ), $img_name_gen );

            $data->update( [
                'image_type' => $request->image_type,
                'image'      => $img_name_gen,
            ] );
        } else {
            $data->update( [
                'image_type' => $request->image_type,
            ] );
        }
        $notification = [
            'message'    => "Image Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.multi' )->with( $notification );
    }
    public function deleteMultiImage( Request $request, $id ) {
        $data = Multi_image::find( $id );
        unlink( str_replace( '\\', '/', public_path( 'upload/multi/' . $data->image ) ) );
        $data->delete();
        $notification = [
            'message'    => "Image Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->back()->with( $notification );
    }
}
