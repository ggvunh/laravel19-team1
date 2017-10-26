<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    public function bill_detail()
        {
            return $this->hasMany('App\BillDetail','bill_id','id');
        }
    public function user()
        {
            return $this->belongsTo('App\User','user_id','id');
        }

    public function product()
        {
            return $this->belongstoMany('App\Product','bill_detail');
        }
}
