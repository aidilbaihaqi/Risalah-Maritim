<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function articlenews(): HasMany {
        return $this->hasMany(ArticleNews::class);
    }
    public function literatures(): HasMany {
        return $this->hasMany(Literature::class);
    }
}
