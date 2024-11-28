<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleNews extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'author',
        'category_id',
        'content',
        'thumbnail',
        'status',
        'approval',
        'views',
        'likes'
    ];
}
