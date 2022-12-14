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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->float('monto');
            $table->float('monto_cuota');
            $table->string('interes_seleccionado');
            $table->float('interes');
            $table->float('saldo');
            $table->date('fecha_pago');
            $table->string('periocidad_pago');
            $table->string('img_auto');
            $table->string('estado_prestamo')->default('Activo');
            $table->float('mora')->default(0);
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clients');
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
        Schema::dropIfExists('prestamos');
    }
};
