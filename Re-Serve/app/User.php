<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'identification', 'birthdate', 'email', 'address', 'password','type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function type(){
        return $this->belongsTo(User_type::class);
    }

    public function restaurant(){
        return $this->hasMany(Restaurant::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function reserve(){
        return $this->hasMany(Reserve::class);
    }
}
