<?php

namespace App;


use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Parent_;

class servicere extends Pivot
{


    protected $table='service_user';


    // public static function boot()
    // {
    //     parent::boot();

    //     static::created(function($item){
    //         dd($item);
    //     });
    // }

    // public function servicecols()
    // {
    //     return $this->belongsToMany(Services::class,'user_id','service_centers_id');

    // }
    // public static function createRequest()
    // {
    //     return $user= Auth::user();
    // }
    // public static function retriveData()
    // {
    //     return $req= Services::all();
    // }
}
