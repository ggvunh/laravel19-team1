<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	//protected $table='orders'

    protected $fillable=['user_id', 'total_price','order_date','order_address', 
    'order_phone','status_id'];
    public function product() {
    	return $this->hasMany('App\Product');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function orderDetails() {
    	return $this->hasMany('App\OrderDetail');
    }

    public function status() {
        return $this->belongsTo('App\Status');
    }


}
