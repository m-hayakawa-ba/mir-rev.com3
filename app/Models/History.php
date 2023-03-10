<?php

namespace App\Models;

use App\Casts\DateTimeFormat;
use App\Casts\NlToBr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    
    /**
     * カラムの設定
     */
    protected $fillable = [
        'content',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];
}
