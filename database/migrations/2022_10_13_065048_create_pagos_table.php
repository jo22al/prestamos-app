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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prestamo');
            $table->float('monto');
            $table->float('mora')->default(0);
            $table->date('fecha_pago');
            $table->string('tipo_de_evidencia');
            $table->string('img_deposito');
            $table->String('saldo_anterior');
            $table->String('nuevo_saldo');
            $table->foreign('id_prestamo')->references('id')->on('prestamos');
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
        Schema::dropIfExists('pagos');
    }
};
