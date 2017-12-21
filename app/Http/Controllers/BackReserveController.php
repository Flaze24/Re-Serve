<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserve;
use App\Restaurant;
use Illuminate\Support\Facades\Cache;

class BackReserveController extends Controller
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
                'show'
            ]
        ]);
    }

    public function index()
    {
        if(auth()->user()->type_id == 3){
            $reserves=Reserve::all();
            return view('backreserve.index',compact('reserves'));
        }

         $reserves = Reserve::where('restaurant_id', auth()->user()->id)->get();
            
        return view('backreserve.index', compact('reserves'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        return view('backreserve.edit', compact('reserve'));
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
        return redirect()->route('backreserve.index');
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
        $reserves=Reserve::all();
        return view('backreserve.index', compact('reserves'));
    }
}
