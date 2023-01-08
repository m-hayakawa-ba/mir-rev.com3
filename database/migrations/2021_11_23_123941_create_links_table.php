<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('サイト名');
            $table->string('link_type', 255)->comment('テキストで分類したリンクの種類');
            $table->string('link_url', 255)->comment('リンク先のURL');
            $table->string('thumbnail_url', 255)->comment('サムネイルのURL');
            $table->string('description', 1023)->comment('リンク先の簡単な説明');
            $table->boolean('is_display')->default(1)->comment('リンクを表示するかどうか');
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
        Schema::dropIfExists('links');
    }
}
