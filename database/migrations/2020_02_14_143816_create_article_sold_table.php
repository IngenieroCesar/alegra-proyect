<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_sold', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_articlesold_user')->references('id')->on('user')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('article_id');
            $table->foreign('article_id', 'fk_articlesold_article')->references('id')->on('article')->onDelete('restrict')->onUpdate('restrict');
            $table->date('sold_date');
            $table->string('buyer_id', 50);
            $table->boolean('status');
            $table->date('guaranty_end');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_sold');
    }
}
