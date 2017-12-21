<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\MessageReceived;
use Illuminate\Support\Facades\Cache;
use Auth;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()

    {
        $this->middleware(
        'admin',
        [ 'except'=>
            [
                'create','store'
            ]
        ]);
    }

    public function index()
    {
        $messages=Message::all();
        
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.contact');
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
            "name"=>'required|min:5',
            "lastname"=>'required|min:5',
            "email"=>'required',
            "message"=>'required|min:10'
        ]);

        $message=Message::create($request->all());
        event(new MessageReceived($message));
      

        return redirect()->route('index');
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
        $message=Message::findOrFail($id);
        return view('messages.edit', compact('message'));
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
        Message::findOrFail($id)->update($request->all());

        // $message= Cache::remember("message.{$id}"),1,function()use($id){
        //     return Message::findOrFail($id);
        // }
        Cache::flush();
        $messages=Message::all();
        return view('messages.index', compact('messages'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::destroy($id);
        Cache::flush();
       $messages=Message::all();
        return view('messages.index', compact('messages'));
    }
}
