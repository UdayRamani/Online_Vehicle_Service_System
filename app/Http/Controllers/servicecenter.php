<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use Illuminate\Support\Facades\Auth;

class servicecenter extends Controller
{
    public function view()
    {
       
    }
    public function list()
    {   
        $data= Services::all();
        $user=Auth::user();
        return view('list',compact('data','user'));
    }
}
