<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'name_song',
        'id_category',
        'summary',
        'content',
        'id_artist',
        'date_post',
        'img_post'
    ];
}
