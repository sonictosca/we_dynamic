<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('use_cases', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('immagine');
            $table->string('collegamento');
            $table->string('settore');
            $table->string('nome');
            $table->integer('posizione');
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
		Schema::drop('use_cases');
	}

}
