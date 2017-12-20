<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Restaurant;
use App\Reserve;



class BackController extends Controller
{
     public function index()
    {   
        $user=User::findOrFail(auth()->user()->id);
        return view('back.index', compact('user'));
    }
public function restaurant()
    {   
        if(auth()->user()->type_id<3)
        {
            $restaurant=Restaurant::findOrFail(auth()->user()->id);
            return view('back.restaurant',compact('restaurant'));
        }

        $restaurants=Restaurant::all();

        return view('back.restaurant', compact('restaurants'));
    }

    public function reserve($id)
    {

        if(auth()->user()->type_id<3)
        {
            $reserve=Reserve::findOrFail($id);
            return view('back.reserve',compact('reserve'));
        }

        $reserves=Reserve::all();

        return view('back.reserve', compact('reserves'));
    }

    public function users(){
        $users=User::all();
        return view('back.users', compact('users'));
    }

    public function userEdit($id){
    	$user=Message::findOrFail($id);
        return view('back.userEdit', compact('user'));
    }

    public function userUpdate(Request $request, $id)
    {
    	User::findOrFail($id)->update($request->all());

        // $message= Cache::remember("message.{$id}"),1,function()use($id){
        //     return Message::findOrFail($id);
        // }
        Cache::flush();
        return redirect()->route('backUsers');
    }

    public function userDelete($id){
    	Message::destroy($id);
    	Cache::flush();
        return redirect()->route('backUsers');
    }


    public function profile(){

    	return view('backProfile');
    }
}
