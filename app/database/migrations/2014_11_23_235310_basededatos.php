<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Basededatos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('T001USUARIO', function($table)
		{
			$table->increments('id');
		    $table->string('nomusu',45);
		    $table->string('apllusu',45);
		    $table->unsignedInteger('tipousu');
		    $table->string('carrusu',45);
		    $table->boolean('aptousu',45);
			$table->integer('matusu');
		});

		Schema::create('T002ACTIVIDAD', function($table)
		{
			$table->increments('id');
		    $table->string('nomact',45);
		    $table->date('fechact',45);
		    $table->integer('costoact');
		    $table->string('descact',45);	
		    $table->string('evidenact',200);
			$table->boolean('programact');
			$table->string('respact',45);
		});

		Schema::create('T003BITACORA', function($table)
		{
			$table->increments('id');
		  	$table->unsignedInteger('codact');
     			$table->foreign('codact')->references('id')->on('T002ACTIVIDAD');
		  	$table->unsignedInteger('codusu');
     			$table->foreign('codusu')->references('id')->on('T001USUARIO');
		});

		Schema::create('T004USUARIO_ADMIN', function($table)
		{
			$table->increments('id');
		    $table->string('user',45);
		    $table->string('passw',45);
		    $table->string('nomusu',45);
		    $table->string('apllusu',45);
		    $table->integer('tipousu');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('T001USUARIO');
		Schema::drop('T002ACTIVIDAD');
		Schema::drop('T003BITACORA');
		Schema::drop('T004USUARIO_ADMIN');
		
		
	}

}
