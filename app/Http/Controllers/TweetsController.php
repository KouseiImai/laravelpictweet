<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TweetRequest;
use Illuminate\Support\facades\DB;
use App\Tweet;


class TweetsController extends Controller
{
    public function index(Request $request)
    {
        return view('tweets.index', ['tweets' => $request->tweets ]);
    }

    public function new(Request $request)
    {
        return view('tweets.new');
    }

    public function create(TweetRequest $request)
    {
        $tweet = new Tweet;
        $param = $request->all();
        unset($param['_token']);
        $tweet->fill($param)->save();
        return redirect('/tweets');
    }

    public function delete(Request $request)
    {
        Tweet::find($request->id)->delete();
        return view('tweets.delete');
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
    public function show(Request $request)
    {
        return view('tweets.show',['tweet' => $request->tweet]);
    }

    public function user_show(Request $request)
    {
        $tweets = Tweet::where('user_id',$request->id)->get();
        return view('users.show',['tweets' => $tweets]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('tweets.edit', ['tweet' => $request->tweet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TweetRequest $request)
    {
        $tweet = Tweet::find($request->id);
        $form =  $request->all();
        unset($form['_token']);
        $tweet->fill($form)->save();
        return view('tweets.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
