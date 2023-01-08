<?php

namespace App\Models;

use App\Casts\DateTimeFormat;
use App\Casts\NlToBr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $casts = [
        'content' => NlToBr::class,
        'updated_on' => DateTimeFormat::class,
    ];
}
