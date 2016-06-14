<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\AppModels\Order;
use App\AppModels\Store;
use App\AppModels\Address;
use DB;


class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function doAddAddress()
	{
    // validate the info, create rules for the inputs
    	$rules = array(
        	'name'    => 'required', // make sure the username field is not empty
        	
    	);

    	$validator = Validator::make(Input::all(), $rules);

    	if ($validator->fails()) {
        	return Redirect::to('/db/addnewaddr')
            	->withErrors($validator);
    	}

    	else {
    		$newItem = new Address;
    		$newItem->fill(Input::all())->save();
    		return Redirect::to('db/viewaddrs');
    	}
	}

    public function showAllAddresses(){
        //below is also feasible way
        //$products = DB::table('products')->paginate(2);
        $addresses = Address::paginate(30);
        return view('/db/addresses/viewaddresses',['addresses' => $addresses]);

    }

    //to populate view

    public function edit($id){

        $address = Address::find($id);


        return view('/db/addresses/editaddr')->withAddress($address);


    }

    public function update($id) {
        $address = Address::find($id);

        $rules = array(
            'name'    => 'required', // make sure the username field is not empty
            
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return view('/db/addresses/editaddr')->withProduct($address)->withErrors($validator);
        }

        else {
            $input = Input::all();

            $address->fill($input)->save();

            return Redirect::to('db/viewaddrs');
        }

    }

    public function delete($id) {
        $addr = Address::find($id);
        $addr->delete();
        return Redirect::to('db/viewaddrs');
 
    }

    public function view($id) {
        $order = Order::find($id);
        return view('db/orders/viewdetail')->withOrder($order);
    }


}
