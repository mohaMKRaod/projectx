<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = ['Title','Price','Quantity'];
    protected $dates = ['created_at','updated_at'];
}
