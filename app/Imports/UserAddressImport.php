<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\User;
use App\Models\DeliveryAddress;

class UserAddressImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
    	foreach($collection as $key => $data){
    		if($key > 0){
    			$user = User::where('email', $data[3])->first();
	    		if($user !== null){
	    			if($data[2] !== null ){
	    				$delivery_address 				= new DeliveryAddress();
		    			$delivery_address->description 	= $data[2];
		    			$delivery_address->address 		= $data[2];
		    			$delivery_address->latitude 	= 6.40595;
		    			$delivery_address->longitude 	= 3.30595;
		    			$delivery_address->is_default 	= 0;
		    			$delivery_address->user_id 		= $user->id;
		    			$delivery_address->save();
	    			}
	    		}
    		}
    	}

        return $collection;
    }
}
