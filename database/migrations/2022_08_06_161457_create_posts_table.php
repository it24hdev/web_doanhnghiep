<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',300)->unique();
            $table->string('slug',300)->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('thumb',300)->default('no-images.jpg')->nullable();
            $table->integer('status')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->integer('service')->default(0);
            $table->integer('show_menu')->default(1);
            $table->string('icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
    public function down()
    {
       Schema::table('posts', function (Blueprint $table) {
           $table->dropForeign('posts_user_id_foreign');
           //
       });
        Schema::dropIfExists('posts');
    }
};
