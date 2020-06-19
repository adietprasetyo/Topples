<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->bigInteger('merk_id')->unsigned();
            $table->bigInteger('harga');
            $table->bigInteger('promo_id')->unsigned();
            $table->integer('stok');
            $table->string('tags');
            $table->string('deskripsi');
            $table->float('rating');
            $table->char('asuransi');
            $table->bigInteger('diskusi_id')->unsigned();
            $table->bigInteger('ulasan_id')->unsigned();
            $table->timestamps();

            $table->foreign('promo_id')->references('id')->on('promos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('merk_id')->references('id')->on('merks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('diskusi_id')->references('id')->on('diskusis')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ulasan_id')->references('id')->on('ulasans')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
