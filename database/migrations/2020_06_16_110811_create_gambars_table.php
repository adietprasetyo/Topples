<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('produk_id')->unsigned();
            $table->text('foto-1')->nullable();
            $table->text('foto-2')->nullable();
            $table->text('foto-3')->nullable();
            $table->text('foto-4')->nullable();
            $table->text('foto-5')->nullable();
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('produks')->onDelete ('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambars');
    }
}
