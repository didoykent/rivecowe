<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table ='rivecowe';
   protected $fillable = array('id','name','price','quantity');
}
