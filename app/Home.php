<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Home extends Model
{
    use Notifiable;

    protected $fillable = [
        'slider_text', 'on_being_human', 'page_title', 'page_creation_date'
    ];
          protected $casts = ['page_creation_date' => 'date'];
}
