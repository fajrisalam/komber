<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use App\Coordinates;

class ApiController extends Controller
{
    public function sendData($user_id, $x, $y){
        $data['user_id'] = $user_id;
        $data['x'] = $x;
        $data['y'] = $y;
        $exist_coord = Coordinates::where('user_id', $user_id)->get();
        if(!$exist_coord->isEmpty()){
            // dd($exist_coord);
            $exist_coord = Coordinates::find($exist_coord[0]->id);
            $exist_coord->x = $x;
            $exist_coord->y = $y;
            $exist_coord->save();
        }
        else {
            $coord = new Coordinates;
            $coord->user_id = $user_id;
            $coord->x = $x;
            $coord->y = $y;
            $coord->save();
        }

        return redirect()->route('map');
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
        $data['all_coordinates'] = Coordinates::orderBy('updated_at', 'desc')->take(5)->get();
        // dd($data['all_coordinates'])
        return view('map', $data);
    }
}
