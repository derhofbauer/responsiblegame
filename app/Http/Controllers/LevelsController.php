<?php

namespace App\Http\Controllers;
use App\Levels;

use Illuminate\Http\Request;

class LevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function game()
    {
        // $levels = Levels::all()->where('id',1);
        // schöner:
        $levels = Levels::find(1);
        return view('game', ['levels'=> $levels]);
       
    }
    public function game2()
    {
        // $levels = Levels::all()->where('id',2);
        // schöner:
        $levels = Levels::find(2);
        return view('game2', ['levels'=> $levels]);
       
    }

    public function game3()
    {
        // $levels = Levels::all()->where('id',3);
        // schöner:
        $levels = Level::find(3);
        return view('game3', ['levels'=> $levels]);
       
    }
    public function game4()
    {
        // $levels = Levels::all()->where('id',4);
        // schöner:
        $levels = Levels::find(4);
        return view('game4', ['levels'=> $levels]);
       
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
