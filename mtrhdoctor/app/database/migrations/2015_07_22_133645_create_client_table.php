<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('firstname' , 60);
			$table->char('medianname' , 60);
			$table->char('lastname' , 60);
            $table->string('picpath');
            $table->string('residence');
            $table->string('personalmobile');
            $table->string('homemobile');
            $table->string('email');
            $table->string('nhif');
            $table->string('profesion');
            $table->string('location');
            $table->char('keen'); 
            $table->string('keenmobile');
            $table->string('username');
            $table->string('password'); 
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client');
	}

}
