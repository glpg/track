<?php

namespace App\AppModels;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    public $timestamps = false;

    protected $fillable = array('name');

    public function orders() 
    {
      return $this->hasMany('App\AppModels\Order');
    }

}
