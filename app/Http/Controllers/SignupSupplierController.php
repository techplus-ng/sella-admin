<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewSupplierSignupNotification;
use Mail;

class SignupSupplierController extends Controller
{
    /*
    |-----------------------------------------
    | INDEX
    |-----------------------------------------
    */
    public function index(Request $request){
        // body
        return view('signup');
    }
    
    /*
    |-----------------------------------------
    | SIGN UP SUPPLIER
    |-----------------------------------------
    */
    public function signup(Request $request){
    	$mail_data = [
    		'name'                => $request->name,
    		'company'             => $request->company,
    		'email'               => $request->email,
    		'phone'               => $request->phone,
            'business_category'   => $request->business_category,
            'about_business'      => $request->about_business,
    	];

    	// Mail::to($request->email)->send(new NewSupplierSignupNotification($mail_data));
    	Mail::to('info@getsella.com')->send(new NewSupplierSignupNotification($mail_data));

    	// body
    	$data = [
	        'status' => 'success',
	        'message' => 'Thank you for signing up, we will contact you shortly!'
	    ];

	    // return.
	    return response()->json($data);
    }
}
