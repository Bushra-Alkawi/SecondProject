<?php

namespace App\Http\Controllers\Front;
use Illuminate\Routing\Controller;


use Illuminate\Http\Request;

class FirstController extends Controller
{
    //put MW inside controller
    public function __construct(){
        $this->middleware('auth')->except('logIn');

    }

    public function withMW(){
        return 'withMW';
    }

    public function withoutMW(){
        return 'withoutMW';
    }


    public function logIn(){
        return 'you need to log in to use this route';
    }
    
}
