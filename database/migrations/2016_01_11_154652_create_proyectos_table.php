<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('idusuario');
			$table->string('tituloproyecto',100);
			$table->integer('idcategoria');
			$table->string('nombrecategoria',100);
			$table->integer('idsubcategoria');
			$table->string('nombresubcategoria',100);
			$table->string('descripcion');
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
        Schema::drop('proyectos');
    }
}
