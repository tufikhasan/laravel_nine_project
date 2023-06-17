<?php

namespace App\Http\Controllers;
use App\Models\portfolios;
use Illuminate\Http\Request;

class PortfolioController extends Controller {
    function allPortfolio() {
        $portfolios = portfolios::latest()->get();
        return view( 'admin.portfolio.all_portfolio', compact( 'portfolios' ) );
    }
    function addPortfolio() {
        return view( 'admin.portfolio.add_portfolio' );
    }
    function storePortfolio( Request $request ) {
        //request validation
        $request->validate( [
            'portfolio_name'  => 'required|string',
            'portfolio_title' => 'required|string',
        ], [
            'portfolio_name.required'  => 'Portfolio name is required',
            'portfolio_title.required' => 'Portfolio title is required',
        ] );
        //insert portfolio
        $file = $request->file( 'portfolio_image' );
        $imageUrl = null;

        if ( $request->file( 'portfolio_image' ) ) {
            $imageUrl = hexdec( uniqid() ) . '.' . $file->getClientOriginalExtension();
            $file->move( public_path( 'upload/portfolio' ), $imageUrl );
        }
        portfolios::insert( [
            'portfolio_name'        => $request->portfolio_name,
            'portfolio_title'       => $request->portfolio_title,
            'portfolio_description' => $request->portfolio_description,
            'portfolio_link'        => $request->portfolio_link,
            'portfolio_image'       => $imageUrl,
        ] );

        $notification = [
            'message'    => "Portfolio Added Successfully",
            'alert-type' => 'success',
        ];
        return redirect()->route( 'all.portfolio' )->with( $notification );
    }
    function editPortfolio( Request $request, $id ) {
        $portfolio = portfolios::findOrFail( $id );
        return view( 'admin.portfolio.edit_portfolio', compact( 'portfolio' ) );
    }
    function updatePortfolio( Request $request, $id ) {
        $portfolio = portfolios::findOrFail( $id );
        //request validation
        $request->validate( [
            'portfolio_name'  => 'required|string',
            'portfolio_title' => 'required|string',
        ], [
            'portfolio_name.required'  => 'Portfolio name is required',
            'portfolio_title.required' => 'Portfolio title is required',
        ] );
        // update portfolio
        if ( $request->file( 'portfolio_image' ) ) {
            $image = $request->file( 'portfolio_image' );
            if ( $portfolio->portfolio_image ) {
                unlink( str_replace( '\\', '/', public_path( 'upload/portfolio/' . $portfolio->portfolio_image ) ) );
            }
            $imageUrl = hexdec( uniqid() ) . '.' . $image->getClientOriginalExtension();
            $image->move( public_path( 'upload/portfolio' ), $imageUrl );

            $portfolio->update( [
                'portfolio_name'        => $request->portfolio_name,
                'portfolio_title'       => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_link'        => $request->portfolio_link,
                'portfolio_image'       => $imageUrl,
            ] );
            $notification = [
                'message'    => "Portfolio Updated With image Successfully",
                'alert-type' => 'success',
            ];
        } else {
            $portfolio->update( [
                'portfolio_name'        => $request->portfolio_name,
                'portfolio_title'       => $request->portfolio_title,
                'portfolio_description' => $request->portfolio_description,
                'portfolio_link'        => $request->portfolio_link,
            ] );
            $notification = [
                'message'    => "Portfolio Updated Without image Successfully",
                'alert-type' => 'success',
            ];
        }

        return redirect()->route( 'all.portfolio' )->with( $notification );
    }

    function deletePortfolio( Request $request, $id ) {
        $portfolio = portfolios::findOrFail( $id );
        if ( $portfolio->portfolio_image ) {
            unlink( str_replace( '\\', '/', public_path( 'upload/portfolio/' . $portfolio->portfolio_image ) ) );
        }
        $portfolio->delete();

        $notification = [
            'message'    => "Portfolio Deleted Successfully",
            'alert-type' => 'success',
        ];

        return redirect()->back()->with( $notification );
        // return redirect()->route( 'all.portfolio' )->with( $notification );
    }

}
