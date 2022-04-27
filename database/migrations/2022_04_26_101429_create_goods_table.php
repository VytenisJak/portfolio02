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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();

            $table->string("title");
            $table->longText("description");
            $table->string('image_url');
            $table->string('image_name');
            $table->unsignedBigInteger("status_id");
            //$table->foreign('status_id')->references('id')->on('task_statuses');
            $table->bigInteger("price");
            $table->string("category");

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
        Schema::dropIfExists('goods');
    }
};
