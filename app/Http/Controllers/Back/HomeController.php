<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function login()
    {
        return "You need to login to see this content";
    }

    public function dashbord(){
        return view('back.index');
    }


}
