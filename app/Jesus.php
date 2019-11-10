<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Jesus extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'page_creation_date', 'whatjesus', 'middle', 'hisheal'
    ];
          protected $casts = ['page_creation_date' => 'date'];
}
