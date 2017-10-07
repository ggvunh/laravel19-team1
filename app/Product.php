<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name','category_id','description','unit_price',
    	'manufacturer_id','photo','quality_in_store','status','review'
    ];

    public function category() {
    	return $this->belongsTo('App\Category');
    }

    public function manufacturer() {
    	return $this->belongsTo('App\Manufacturer');
    }

    public function photo() {
    	return $this->hasOne('App\Photo');
    }

    public function orderDetails() {
    	return $this->hasMany('App\OrderDetail');
    }

    public function specifications() {
    	return $this->hasMany('App\Specification');
    }
}
