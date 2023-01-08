<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * カラムの設定
     */
    protected $fillable = [
        'name',
        'game_status_id',
        'link_path',
        'thumbnail_path',
        'description',
        'sort_index',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $appends = [
        'game_status_name',
    ];

    /**
     * リレーション
     */
    Public function game_status()
    {
        return $this->belongsTo('App\Models\GameStatus');
    }

    /**
     * アクセサ
     */
    public function getGameStatusNameAttribute()
    {
        return $this->game_status->name;
    }
}
