<?php

namespace App\AppModels;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    protected $fillable = array('prod_name', 'prod_num');

}
