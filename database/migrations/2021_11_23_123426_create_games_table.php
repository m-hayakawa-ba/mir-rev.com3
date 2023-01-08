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
            $table->string('title', 255)->comment('ゲームタイトル');
            $table->string('status', 255)->comment('開発中、発売中、などのステータス');
            $table->string('link_url', 255)->comment('ゲームの紹介ページのURL');
            $table->string('thumbnail_url', 255)->comment('サムネイルのURL');
            $table->string('description', 1023)->comment('ゲームの簡単な説明');
            $table->boolean('is_display')->default(1)->comment('ゲームを表示するかどうか');
            $table->integer('sort_number')->default(1)->comment('並び順');
            $table->timestamps();
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
