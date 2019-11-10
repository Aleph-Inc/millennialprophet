<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Event extends Model
{
    
      protected $casts = ['date' => 'date'];

      use Notifiable;

      protected $fillable = [
        'name', 'description', 'place', 'image' ,'date', 'time', 'country'
      ];

}
