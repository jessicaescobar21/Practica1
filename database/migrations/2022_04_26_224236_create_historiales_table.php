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
        Schema::create('historiales', function (Blueprint $table) {
            $table->bigInteger('idReasignaciones')->primary();
            $table->string('motivo', 45);
            $table->dateTime('fechCambio');
            $table->bigInteger('FK_idJefe')->nullable();
            $table->bigInteger('FK_idTienda')->nullable();

            $table->foreign('FK_idJefe')
                  ->references('idJefe')
                  ->on('empleados')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();

            $table->foreign('FK_idTienda')
                  ->references('idTienda')
                  ->on('tiendas')
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
        Schema::dropIfExists('historiales');
    }
};
