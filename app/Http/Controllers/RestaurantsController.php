<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use App\Restaurant;
use Illuminate\Support\Facades\Cache;
use Auth;


class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()

    {
        $this->middleware(
        'manager',
        [ 'except'=>
            [
                'index', 'show', 'create'
            ]
        ]);
    }

    public function index()
    {   if(Auth::check()){

        if(auth()->user()->type_id = 3){
            $restaurants=Restaurant::all();
            return view('restaurant.dash',compact('restaurants'));
        }
    }
        $restaurants=Restaurant::all();

        // $restaurants=Cache::rememberForever('restaurants.all');
            
        return view('restaurant.index', compact('restaurants'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name"=>'required|min:5;',
            "description"=>'required|min:10',
            "email"=>'required',
            "phone"=>'min:7|max:12',
            "type"=>'required',
            "address"=>'required|min:10',
            "dish_description"=>'required|min:10',
            "opening_time"=>'required',
            "closing_time"=>'required',
            "reserve_number"=>'required|int',
           
        ]);

        $restaurant=Restaurant::create($request->all());
        
      

        return redirect()->route('pages.dashindex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurants=Restaurant::findOrFail($id);
        // $users=User::findOrFail($id2);
        return view('restaurant.show', compact('restaurants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant=Restaurant::findOrFail($id);

        return view('restaurant.edit', compact('restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Restaurant::findOrFail($id)->update($request->all());
        Cache::flush();
        return redirect()->route('pages.dashindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reserve::destroy($id);
        Cache::flush();
        return redirect()->route('pages.dashindex');
    }
}
