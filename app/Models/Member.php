<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nim',
        'name',
        'semester',
        'photo_banner', // ini skip aja dlu pan
        'position',
        'division',
        'major',
        'campus'
    ];
}
