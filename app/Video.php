<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
    public function catergories()
    {
        return $this->hasMany('App\User');
    }
}
