<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller {
    function allService() {
        $services = Service::latest()->get();
        return view( 'admin.service.all_services', compact( 'services' ) );
    }
    function addService() {
        return view( 'admin.service.add_service' );
    }
    function storeService( Request $request ) {

        $iconUrl = null;
        $imageUrl = null;

        if ( $request->file( 'icon' ) ) {
            $icon = $request->file( 'icon' );
            $iconUrl = hexdec( uniqid() ) . '.' . $icon->getClientOriginalExtension();
            $icon->move( public_path( 'upload/service' ), $iconUrl );
        }
        if ( $request->file( 'image' ) ) {
            $image = $request->file( 'image' );
            $imageUrl = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'upload/service' ), $imageUrl );
        }

        Service::insert( [
            'title'        => $request->title,
            'description'  => $request->description,
            'service_list' => $request->service_list,
            'icon'         => $iconUrl,
            'image'        => $imageUrl,
        ] );

        $notification = [
            'message'    => "Service Added Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.service' )->with( $notification );
    }

    function editService( Request $request ) {
        $service = Service::findOrFail( $request->id );
        return view( 'admin.service.edit_service', compact( 'service' ) );
    }
    function updateService( Request $request ) {
        $service = Service::findOrFail( $request->id );

        $iconUrl = $service->icon;
        $imageUrl = $service->image;

        if ( $request->file( 'icon' ) ) {
            $icon = $request->file( 'icon' );
            if ( $service->icon ) {
                unlink( str_replace( '\\', '/', public_path( 'upload/service/' . $service->icon ) ) );
            }
            $iconUrl = hexdec( uniqid() ) . '.' . $icon->getClientOriginalExtension();
            $icon->move( public_path( 'upload/service' ), $iconUrl );
        }
        if ( $request->file( 'image' ) ) {
            $image = $request->file( 'image' );
            if ( $service->image ) {
                unlink( str_replace( '\\', '/', public_path( 'upload/service/' . $service->image ) ) );
            }
            $imageUrl = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'upload/service' ), $imageUrl );
        }
        $service->update( [
            'title'        => $request->title,
            'description'  => $request->description,
            'service_list' => $request->service_list,
            'icon'         => $iconUrl,
            'image'        => $imageUrl,
        ] );

        $notification = [
            'message'    => "Service Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.service' )->with( $notification );
    }

    function deleteService( Request $request ) {
        $service = Service::findOrFail( $request->id );

        if ( $service->icon ) {
            unlink( str_replace( '\\', '/', public_path( 'upload/service/' . $service->icon ) ) );
        }

        if ( $service->image ) {
            unlink( str_replace( '\\', '/', public_path( 'upload/service/' . $service->image ) ) );
        }

        $service->delete();

        $notification = [
            'message'    => "Service Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.service' )->with( $notification );
    }
}
