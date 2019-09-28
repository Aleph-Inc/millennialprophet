<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use Notifiable;

    protected $fillable = [
        'user_name', 'article_name', 'date', 'description'
    ];
}
