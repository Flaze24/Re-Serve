<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable=[
    	'reserve_date','reserve_time','guest_amount','user_id','restaurant_id','message'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function restaurant(){
    	return $this->belongsTo(Restaurant::class);
    }
}
