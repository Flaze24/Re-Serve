<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Reserve;
use Illuminate\Support\Facades\Cache;

class ReservesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()

   {
        $this->middleware(
        'user',
        [ 'except'=>
            [
                'create'
            ]
        ]);
    }
    public function index()
    {
       $reserves = Reserve::where('user_id', auth()->user()->id)->get();
            
        return view('reserve.index', compact('reserves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "reserve_date"=>'required|date|after:today',
            "reserve_time"=>'required',
            "guest_amount"=>'required|integer',
           
        ]);

        $restaurants=Restaurant::findOrFail($request->restaurant_id);

        if($request->guest_amount>$restaurants->reserve_number || $request->reserve_time<$restaurants->opening_time || $request->reserve_time>$restaurants->closing_time)
        {
            return back();
        }

        $reserves=Reserve::create($request->all());
        return redirect()->route('reserve.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $reserve=Reserve::findOrFail($id);

        return view('reserve.edit', compact('reserve'));
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
        Reserve::findOrFail($id)->update($request->all());
        Cache::flush();
        return redirect()->route('reserve.index');
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
        return redirect()->route('reserve.index');
    }
}
