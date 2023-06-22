<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\Abouts;
use App\Models\Awards;
use App\Models\Education;
use App\Models\Multi_image;
use App\Models\Skill;
use Illuminate\Http\Request;

class AboutControllers extends Controller {
    //About all method from here
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
        $multi_image = Multi_image::where( 'image_type', 'about' )->limit( 6 )->get();
        return view( 'frontend.about.about_page', compact( 'aboutData', 'multi_image' ) );
    }

    //Skill all method from here
    function allSkill() {
        $skills = Skill::latest()->get();
        return view( 'admin.about.skill.all_skill', compact( 'skills' ) );
    }
    function addSkill() {
        return view( 'admin.about.skill.add_skill' );
    }
    function storeSkill( Request $request ) {
        Skill::insert( [
            'title'      => $request->title,
            'percentage' => $request->percentage,
        ] );
        $notification = [
            'message'    => "Skill Added Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.skill' )->with( $notification );
    }
    function editSkill( Request $request ) {
        $skill = Skill::findOrFail( $request->id );
        return view( 'admin.about.skill.edit_skill', compact( 'skill' ) );
    }
    function updateSkill( Request $request ) {
        Skill::findOrFail( $request->id )->update( [
            'title'      => $request->title,
            'percentage' => $request->percentage,
        ] );
        $notification = [
            'message'    => "Skill Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.skill' )->with( $notification );
    }
    function deleteSkill( Request $request ) {
        Skill::findOrFail( $request->id )->delete();
        $notification = [
            'message'    => "Skill Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.skill' )->with( $notification );
    }

    //Awards all method from here
    function allAward() {
        $awards = Awards::latest()->get();
        return view( 'admin.about.award.all_award', compact( 'awards' ) );
    }
    function addAward() {
        return view( 'admin.about.award.add_award' );
    }
    function storeAward( Request $request ) {
        $logoUrl = null;
        if ( $request->file( 'logo' ) ) {
            $logo = $request->file( 'logo' );
            $logoUrl = hexdec( uniqid() ) . '.' . $logo->getClientOriginalExtension();
            $logo->move( public_path( 'upload/about' ), $logoUrl );
        }
        Awards::insert( [
            'logo'        => $logoUrl,
            'title'       => $request->title,
            'description' => $request->description,
        ] );
        $notification = [
            'message'    => "Award Added Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.award' )->with( $notification );
    }
    function editAward( Request $request ) {
        $award = Awards::findOrFail( $request->id );
        return view( 'admin.about.award.edit_award', compact( 'award' ) );
    }
    function updateAward( Request $request ) {
        $award = Awards::findOrFail( $request->id );
        $logoUrl = $award->logo;

        if ( $request->file( 'logo' ) ) {
            $logo = $request->file( 'logo' );
            if ( $award->logo ) {
                unlink( str_replace( '\\', '/', public_path( 'upload/about/' . $award->logo ) ) );
            }
            $logoUrl = hexdec( uniqid() ) . '.' . $logo->getClientOriginalExtension();
            $logo->move( public_path( 'upload/about' ), $logoUrl );
        }
        $award->update( [
            'logo'        => $logoUrl,
            'title'       => $request->title,
            'description' => $request->description,
        ] );
        $notification = [
            'message'    => "Award Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.award' )->with( $notification );
    }
    function deleteAward( Request $request ) {
        $award = Awards::findOrFail( $request->id );

        if ( $award->logo ) {
            unlink( str_replace( '\\', '/', public_path( 'upload/about/' . $award->logo ) ) );
        }
        $award->delete();
        $notification = [
            'message'    => "Award Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.award' )->with( $notification );
    }

    //Education all method from here
    function allEducation() {
        $educations = Education::latest()->get();
        return view( 'admin.about.education.all_education', compact( 'educations' ) );
    }
    function addEducation() {
        return view( 'admin.about.education.add_education' );
    }
    function storeEducation( Request $request ) {
        Education::insert( [
            'date'        => $request->date,
            'title'       => $request->title,
            'description' => $request->description,
        ] );
        $notification = [
            'message'    => "Education Added Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.education' )->with( $notification );
    }
    function editEducation( Request $request ) {
        $education = Education::findOrFail( $request->id );
        return view( 'admin.about.education.edit_education', compact( 'education' ) );
    }
    function updateEducation( Request $request ) {
        Education::findOrFail( $request->id )->update( [
            'date'        => $request->date,
            'title'       => $request->title,
            'description' => $request->description,
        ] );
        $notification = [
            'message'    => "Education Updated Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.education' )->with( $notification );
    }
    function deleteEducation( Request $request ) {
        Education::findOrFail( $request->id )->delete();
        $notification = [
            'message'    => "Education Deleted Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.education' )->with( $notification );
    }
}
