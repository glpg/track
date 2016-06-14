<?php

namespace App\AppModels;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    public $timestamps = false;

    protected $fillable = array('name', 'addressline1','addressline2','city','state','zip','country', 'phonenumber');

    public function orders() 
    {
      return $this->hasMany('App\AppModels\Order');
    }

}
