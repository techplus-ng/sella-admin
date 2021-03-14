<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class VerifyReferenceController extends Controller
{
    /*
    |-----------------------------------------
    | VERIFY REFERENCE
    |-----------------------------------------
    */
    public function verify(Request $request){
    	// body
        if(empty($request->reference)){
            $data = [
                "status"     => "error",
                "message"    => "No reference specified!" 
            ];
        }else{
            $endpoint = 'https://api.paystack.co/transaction/verify/'.$request->reference;

            // charge headers
            $headers  = array(
                'Content-Type: application/json', 
                'Authorization: Bearer '.env("PAYSTACK_SECRET_KEY")
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
            curl_setopt($ch, CURLOPT_TIMEOUT, 200);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $res = curl_exec($ch);
            $results = json_decode($res, true);

            if($results["status"] == true){
                $data = [
                    'status'  => 'verified',
                    'message' => 'Transaction successful!'
                ];
            }else{
                $data = [
                    "status"     => "error",
                    "message"    => "returning response!",
                    "data"       => $results
                ];
            }
        }

        // return.
        return response()->json($data);
    }
}
