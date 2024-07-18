<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 Schema::create('practices', function (Blueprint $table) {
                 $table->id();
                 $table->text('title')->comment('タイトル');
     $table->timestamps();
 });
    


 // movies テーブルのマイグレーションファイル
 Schema::create('movies', function (Blueprint $table) {
     $table->id();
     $table->string('title');
     $table->string('image_url');
     $table->integer('published_year')->default(2000);
     $table->string('description')->nullable(); 
     $table->boolean('is_showing')->default(false);
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
        Schema::dropIfExists('table');
    }
}
