<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nim',
        'photo_banner', // ini skip aja dlu pan
        'position',
        'division',
        'major',
        'campus'
    ];
}
