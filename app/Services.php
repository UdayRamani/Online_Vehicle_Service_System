<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $table = 'service_centers';

    public function users()
    {
        return $this->belongsToMany(User::class, 'service_user')
        ->withPivot('user_id', 'service_id');
    }
}
