<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Onetime extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'page_creation_date'
    ];
          protected $casts = ['page_creation_date' => 'date'];
}
