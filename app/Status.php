<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable=['name'];

  	public function product() {
  		return $this->hasOne('App\Product');
  	}

  	public function order() {
  		return $this->hasOne('App\Order');
  	}
}
