<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable=[
    	'name','description','email','phone','type','clothing','chef_name','address','dish_type','main_dish','dish_description','opening_time','closing_time','reserve_number','restaurant_photo','user_id'
    ];

    public function comment(){
    	return $this->hasMany(Comment::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }


    public function reserve(){
        return $this->hasMany(Reserve::class);
    }
}
