<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCargas extends Migration {

	/**
	 * Corre la migracion para crear la tabla de cargas legales en la base de datos
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cargas', function(Blueprint $table)
		{
			$table->string('rut',12);
			$table->string('nombres',50);
			$table->string('apellido_paterno',50);
			$table->string('apellido_materno',50);
			$table->date('fecha_nacimiento');
			$table->string('parentesco',30);
			$table->string('ocupacion',30);
			$table->string('rut_empleado',12);
			$table->timestamps();
			//Definicion clave primaria
			$table->primary('rut');
			//Definicion claves foraneas
			$table->foreign('rut_empleado')->references('rut')->on('empleados')
				->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Revierte la creacion de la tabla
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cargas');
	}

}
