<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Partner extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'page_creation_date', 'partner'
    ];
          protected $casts = ['page_creation_date' => 'date'];
}
