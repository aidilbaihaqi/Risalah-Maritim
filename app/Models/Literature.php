<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Literature extends Model
{

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

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    protected static function booted()
    {
        static::creating(function ($article) {
            $article->slug = Str::slug($article->title);
        });
    }

    protected $attributes = [
        'slug' => 'default-slug',
    ];
}
