<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	//protected $table='orders'

    protected $fillable=[
        'user_id', 'order_date', 'total_price',
        'order_address', 'order_phone','status'
    ];
    public function product() {
    	return $this->hasMany('App\Product','order_detail');
    }

    public function user() {
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function orderDetails() {
    	return $this->hasMany('App\OrderDetail','order_id','id');
    }
}
