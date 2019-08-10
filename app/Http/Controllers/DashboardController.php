<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class DashboardController extends Controller
{
    public function admin(Request $request){

        return view('index',[
            'title'=>'Dashboard',
        ]);
    }
}
