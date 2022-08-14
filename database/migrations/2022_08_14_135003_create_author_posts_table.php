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
        //id, postTitle, postDesc, autName, webID

        Schema::create('author_posts', function (Blueprint $table) {
            $table->id();
            $table->string('postTitle');
            $table->string('postDesc');
            $table->string('autName');
            $table->integer('webID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_posts');
    }
};
