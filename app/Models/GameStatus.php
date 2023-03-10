<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameStatus extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * カラムの設定
     */
    protected $fillable = [
        'name',
    ];
}
