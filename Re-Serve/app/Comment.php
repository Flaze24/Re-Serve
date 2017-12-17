<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
    	'comment','user_id','restaurant_id'
    ];

	public function user(){
    	return $this->belongsTo(User::class);
    }

    public function restaurant(){
    	return $this->belongsTo(Restaurant::class);
    }

}
