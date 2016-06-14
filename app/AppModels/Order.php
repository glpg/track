<?php

namespace App\AppModels;

use App\AppModels\Address;
use App\AppModels\Store;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;

    public function address()
    {
        return $this->belongsTo('App\AppModels\Address');
    }

    public function store()
    {
        return $this->belongsTo('App\AppModels\Store');
    }


}
