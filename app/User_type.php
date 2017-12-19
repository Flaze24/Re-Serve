<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    protected $fillable=[
    	'type'
    ];

    public function type(){
    	return $this->hasMany(User::class);
    }
}
