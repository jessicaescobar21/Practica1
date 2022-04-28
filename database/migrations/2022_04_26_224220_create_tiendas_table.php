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
        Schema::create('tiendas', function (Blueprint $table) {
            $table->bigInteger('idTienda')->primary();
            $table->string('nombreOficial', 150);
            $table->string('correo', 100);
            $table->string('calle', 100);
            $table->tinyInteger('state');
            $table->bigInteger('FK_idJefe')->nullable();

            $table->foreign('FK_idJefe')
                  ->references('idJefe')
                  ->on('empleados')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
};
