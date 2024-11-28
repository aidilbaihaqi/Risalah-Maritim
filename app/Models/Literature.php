<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Literature extends Model
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

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
