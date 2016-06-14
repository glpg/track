<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\AppModels\Carrier;
use DB;


class CarrierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function doAddCarrier()
	{
    // validate the info, create rules for the inputs
    	$rules = array(
        	'name'    => 'required', // make sure the username field is not empty
        	
    	);

    	$validator = Validator::make(Input::all(), $rules);

    	if ($validator->fails()) {
        	return Redirect::to('/db/addnewcarrier')
            	->withErrors($validator);
    	}

    	else {
    		$newItem = new Carrier;
    		$newItem->name = Input::get('name');
    		$newItem->save();
    		return Redirect::to('db/viewcarriers');
    	}
	}

    public function showAllCarriers(){
        //below is also feasible way
        //$products = DB::table('products')->paginate(2);
        $carriers = Carrier::paginate(30);
        return view('/db/carriers/viewcarriers',['carriers' => $carriers]);

    }

    

    public function delete($id) {
        $carrier = Carrier::find($id);
        $carrier->delete();
        return Redirect::to('db/viewcarriers');
 
    }


}
