<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('ゲームタイトル');
            $table->foreignId('game_status_id')->comment('ゲームのステータスid')->constrained();
            $table->string('link_path', 255)->comment('ゲームの紹介ページのパス');
            $table->string('thumbnail_path', 255)->comment('サムネイルのパス');
            $table->string('description', 1023)->comment('ゲームの簡単な説明');
            $table->integer('sort_index')->default(1)->comment('並び順');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
