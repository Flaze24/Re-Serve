<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
     public function __construct()

    {
        $this->middleware(
        'manager',
        [ 'only'=>
            [
                'dashindex','restaurant'
            ]
        ]);
    }

     public function index(){

		$restaurants=Restaurant::all();
        $users=DB::table('users')->pluck('id');
        // $restaurants=Cache::rememberForever('restaurants.all');

        return view('pages.index', compact('restaurants', 'users'));
    }

    // public function res_show_index(){
    // 	$restaurants=Restaurant::findOrFail($id);
    //     return view('restaurant.show', compact('restaurants'));
    // }

    public function about(){
    	return view('pages.about');
    }

    public function cancel(){
    	return view('pages.cancel');
    }

    public function dashindex(){
        $users=User::findOrFail(auth()->user()->id);
        return view('pages.dashindex', compact('users'));
    }

    public function restaurant(){
        $restaurants=Restaurant::where('user_id',auth()->user()->id)->get();
        return view('pages.restaurant',compact('restaurants'));
    }

    
}
