<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function sendData($r1, $r2, $r3){
        $x1 = 0; $y1 = 11;
        $x2 = 11; $y2 = 11;
        $x3 = 5; $y3 = 0;

        $A = -2*$x1 + 2*$x2;
        $B = -2*$y1 + 2*$y2;
        $C = $r1*$r1 - $r2*$r2 - $x1*$x1 + $x2*$x2 - $y1*$y1 + $y2*$y2;
        $D = -2*$x2 + 2*$x3;
        $E = -2*$y2 + 2*$y3;
        $F = $r2*$r2 - $r3*$r3 - $x2*$x2 + $x3*$x3 - $y2*$y2 + $y3*$y3;

        $data['x'] = ($C*$E - $F*$B) / ($E*$A - $B*$D);
        $data['y'] = ($C*$D - $A*$F) / ($B*$D - $A*$E);

        // return view('tes', $data);
        return view('map', $data);
    }

    public function send(){
        return 'ooke';
    }
    public function send1($s){
        return '1 titik';
    }
    public function send2($e, $w){
        return '2 titik';
    }

    public function map(){
        return view('map');
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
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
