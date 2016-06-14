<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;
use Redirect;
use App\AppModels\Product;
use DB;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAddForm()
    {
        return view('/db/products/addproduct');
    }


    public function doAddProduct()
	{
    // validate the info, create rules for the inputs
    	$rules = array(
        	'prod_name'    => 'required', // make sure the username field is not empty
        	
    	);

    	$validator = Validator::make(Input::all(), $rules);

    	if ($validator->fails()) {
        	return Redirect::to('/db/addnewprod')
            	->withErrors($validator);
    	}

    	else {
    		$newItem = new Product;
    		$newItem->prod_name = Input::get('prod_name');
    		$newItem->prod_num = Input::get('prod_num');
    		$newItem->save();
    		return Redirect::to('db/viewprods');
    	}
	}

    public function showAllProducts(){
        //below is also feasible way
        //$products = DB::table('products')->paginate(2);
        $products = Product::paginate(30);
        return view('/db/products/viewproducts',['products' => $products]);

    }

    //to populate view

    public function editProd($id){

        $prod = Product::find($id);


        return view('/db/products/editproduct')->withProduct($prod);


    }

    public function updateProd($id) {
        $prod = Product::find($id);

        $rules = array(
            'prod_name'    => 'required', // make sure the username field is not empty
            
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return view('/db/products/editproduct')->withProduct($prod)->withErrors($validator);
        }

        else {
            $input = Input::all();

            $prod->fill($input)->save();

            return Redirect::to('db/viewprods');
        }

    }

    public function deleteProd($id) {
        $prod = Product::find($id);
        $prod->delete();
        return Redirect::to('db/viewprods');
 
    }


}
