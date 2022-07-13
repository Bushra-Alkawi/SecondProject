<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function showUserName(){
        return 'user: bushra';
    }

    //passing data from controller using array
    public function getIndex(){
        $data = [];
        $data['id'] = 8;
        $data['name']= 'bushra';

        return view('welcome',$data);
    }

        //passing data from controller using obj
    public function getIndex2(){
        $obj = new \stdClass();

        $obj->name = 'bu';
        $obj->id = 7;
        $obj->age = 9;

        return view('welcome',compact('obj'));
    }
}
