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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_producto');
            $table->string('nombre_disenio_producto');
            $table->string('color_producto');
            $table->string('foto_producto', 2048)->nullable();
            $table->integer('precio_producto');
            $table->timestamps();

            $table->foreign('id_tipo_producto')->references('id')->on('tipo_productos')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
