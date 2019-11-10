<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class DigitalTraining extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'page_creation_date', 'middle'
    ];
          protected $casts = ['page_creation_date' => 'date'];
}
