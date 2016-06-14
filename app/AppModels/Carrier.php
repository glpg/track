<?php

namespace App\AppModels;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    protected $table = 'carriers';
    public $timestamps = false;

    protected $fillable = array('name');

}
