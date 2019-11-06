<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class About extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'whoweare', 'whatjesus', 'hisheal', 'ministries', 'page_title', 'page_creation_date'
    ];
          protected $casts = ['page_creation_date' => 'date'];
}
