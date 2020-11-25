<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    | TOP POLICY CHARTS
    |-----------------------------------------
    */
    public function privacyPolicy(){
        // body
        return view('privacy-policy');
    }

    /*
    |-----------------------------------------
    | TOP TERMS CHARTS
    |-----------------------------------------
    */
    public function termsConditions(){
        // body
        return view('terms-conditions');
    }
}
