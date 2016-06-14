<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\AppModels\Store;
use DB;


class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    public function doAddStore()
	{
    // validate the info, create rules for the inputs
    	$rules = array(
        	'name'    => 'required', // make sure the username field is not empty
        	
    	);

    	$validator = Validator::make(Input::all(), $rules);

    	if ($validator->fails()) {
        	return Redirect::to('/db/addnewstore')
            	->withErrors($validator);
    	}

    	else {
    		$newItem = new Store;
    		$newItem->name = Input::get('name');
    		$newItem->save();
    		return Redirect::to('db/viewstores');
    	}
	}

    public function showAllStores(){
        //below is also feasible way
        //$products = DB::table('products')->paginate(2);
        $stores = Store::paginate(30);
        return view('/db/stores/viewstores',['stores' => $stores]);

    }

    

    public function deleteProd($id) {
        $store = Store::find($id);
        $prod->delete();
        return Redirect::to('db/viewstores');
 
    }


}
