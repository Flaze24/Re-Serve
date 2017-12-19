<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
     public function index(){

		$restaurants=Restaurant::all();
        // $restaurants=Cache::rememberForever('restaurants.all');
       
        return view('pages.index', compact('restaurants'));
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
}
