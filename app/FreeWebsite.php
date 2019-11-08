<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FreeWebsite extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'page_creation_date', 'middle', 'join', 'create', 'launch'
    ];
          protected $casts = ['page_creation_date' => 'date'];
}
