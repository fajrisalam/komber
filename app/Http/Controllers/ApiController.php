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

        return redirect()->route('map_android');
    }

    public function send(){
        return 'ok';
    }

    public function user_id($user_id){
        return 'id';
    }

    public function x($user_id, $x){
        return 'id and x';
    }

    public function map_android(){
        $data['all_coordinates'] = Coordinates::whereBetween('updated_at', [now()->subMinutes(1), now()])->orderBy('updated_at', 'desc')->take(5)->get();
        return view('map_android', $data);
    }

    public function map_desktop(){
        $data['all_coordinates'] = Coordinates::whereBetween('updated_at', [now()->subMinutes(1), now()])->orderBy('updated_at', 'desc')->take(5)->get();
        return view('map_desktop', $data);
    }
}
