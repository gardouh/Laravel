<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Laravel_Test;
use Illuminate\Support\Facades\DB;

class video_controller extends Controller
{
    use AuthorizesRequests , DispatchesJobs, ValidatesRequests;


    //cette fonction enregistre le temps du demerrage du video
    public function insert(Request $req){

        $add = new \App\Add;
        $add->name='Khalil';
        $add->save();
    }

    //cette fonction Enregistre le temps  du pause
    public function pause(Request $req){


        $pause = new \App\Pause;
        $pause->save();


    }


    //Cette metheode calcul la diffirence de deux temps
    public function caculDiff(Request $req){


        $play = \App\Add::orderBy('created_at', 'desc')->first();
        $pause = \App\Pause::orderBy('created_at', 'desc')->first();

        $dteStart = $play->created_at;
        $dteEnd = $pause->created_at;



        $interval=$dteStart->diff($dteEnd);
        $result = "";
        if ($interval->y) { $result .= $interval->format("%y years "); }
        if ($interval->m) { $result .= $interval->format("%m months "); }
        if ($interval->d) { $result .= $interval->format("%d days "); }
        if ($interval->h) { $result .= $interval->format("%h hours "); }
        if ($interval->i) { $result .= $interval->format("%i minutes "); }
        if ($interval->s) { $result .= $interval->format("%s seconds "); }

        echo $result;


    }

}
