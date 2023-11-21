<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'title',
        'content',
        'slug',
        'image',
        'meta_keyword',
        'meta_description'
    ];
}
