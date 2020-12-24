<?php

namespace App\Http\Controllers;

use App\servicere;
use Illuminate\Http\Request;
use App\User;
use App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ViewErrorBag;
use Mapper;

class RequestController extends Controller
{
  public function serviceCart()
  {
    $listcarts=servicere::all();
    return view('services.listofcarts',compact('listcarts'));
  }
  public function deleteCart($id)
  {
    $service=servicere::find($id);
    // dd($service);
    $service->delete();

    return redirect()->to('servicecart');
  }

  public function payment(){

    return view('services.Payment');
  
  }
  public function dataatc($id)
  {

    $user = User::all();
    $serviceid=Services::find($id);
    $listcarts=servicere::all();
    //get currentLocation
    $ip='114.31.180.107';
    // $ip = request()->ip();
    $data = \Location::get($ip);
    
    //Add the data to Database for cart using perticuler ID
    $cart[$id]=[
      'latitude'=>$data->latitude,
      'longitude'=>$data->longitude,
      'servicecentername'=>$serviceid->servicecentername,
      'phoneno'=>$serviceid->phoneno,
      'address'=>$serviceid->address
    ];

    $service=Services::all();
    foreach ($user as $data1) {
      $user = User::find($data1->id);
    }
    //Attach to Pivot Table
    $user->services()->attach($cart);
   
    return view('servicecart',compact('cart','listcarts'));
  }

  
}
