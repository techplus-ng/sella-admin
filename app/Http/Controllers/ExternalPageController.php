<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserAddressImport;
use Excel;

class ExternalPageController extends Controller
{
    /*
    |-----------------------------------------
    | SHOW INDEX
    |-----------------------------------------
    */
    public function index(Request $request){
    	
    	// body
    	return view('index');
    }

    /*
    |-----------------------------------------
    | SHOW CONTACT US
    |-----------------------------------------
    */
    public function contact(Request $request){
    	// body
    	return view('contact');
    }

    /*
    |-----------------------------------------
    | SHOW UPLOAD ADDRESS
    |-----------------------------------------
    */
    public function uploadAddress(Request $request){
        // body
        return view('upload-address');
    }

    /*
    |-----------------------------------------
    | upload user address
    |-----------------------------------------
    */
    public function uploadUserAddress(Request $request){
        // body
        $excel_file = Excel::import(new UserAddressImport(), $request->address_file);
        return redirect()->back()->with('success', 'Address uploaded!');
    }

    /*
    |-----------------------------------------
    | TOP POLICY CHARTS
    |-----------------------------------------
    */
    public function privacyPolicy(Request $request){
        // body
        return view('privacy-policy');
    }

    /*
    |-----------------------------------------
    | TOP TERMS CHARTS
    |-----------------------------------------
    */
    public function termsConditions(Request $request){
        // body
        return view('terms-conditions');
    }

    /*
    |-----------------------------------------
    | FB CALLBACK 
    |-----------------------------------------
    */
    public function facebookCallback(Request $request){
        // body
        $data = [
            "status"    => "success",
            "message"   => "successful!"
        ];

        // return.
        return response()->json($data);
    }
}
