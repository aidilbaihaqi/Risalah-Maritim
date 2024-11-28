<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerAdvertisement extends Model
{

    protected $fillable = [
        'link',
        'is_active',
        'type',
        'company',
        'thumbnail'
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    
    public function getImageUrlAttribute(): string
    {
        return asset('storage/' . $this->thumbnail);
    }
}
