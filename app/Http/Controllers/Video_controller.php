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


    public function insert(Request $req){

     //   $data = array('name'=>"khalil");
     //   DB::table('add')->insert($data);
     //   echo "<script> window.close(); </script>";

        $add = new \App\Add;
        $add->name='Khalil';
        $add->save();
    }

}
