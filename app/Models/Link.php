<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    /**
     * カラムの設定
     */
    protected $fillable = [
        'name',
        'link_type_id',
        'link_url',
        'thumbnail_path',
        'description',
        'sort_index',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
