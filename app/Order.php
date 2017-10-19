<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table='orders'

    protected $fillable=['user_id', 'total_price', 'order_address', 
    'order_phone'];
    public function product() {
    	return $this->hasMany('App\Product');
    }
}
