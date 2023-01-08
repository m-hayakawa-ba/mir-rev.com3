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
            $table->foreignId('link_type_id')->comment('テキストで分類したリンクの種類id')->constrained();
            $table->string('link_url', 255)->comment('リンク先のURL');
            $table->string('thumbnail_path', 255)->comment('サムネイルのパス');
            $table->string('description', 1023)->comment('リンク先の簡単な説明');
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
        Schema::dropIfExists('links');
    }
}
