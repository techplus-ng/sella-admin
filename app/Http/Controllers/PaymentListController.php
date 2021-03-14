<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentListController extends Controller
{
    /*
    |-----------------------------------------
    | FETCH ALL PAYMENTS
    |-----------------------------------------
    */
    public function fetchAll(Request $request){
    	// body
    	$data = [
    		'status' 	=> 'success',
    		'message' 	=> 'None found!'
    	];

    	// return response.
    	return response()->json($data);
    }
}
