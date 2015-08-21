<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->char('name' , 100);
            $table->string('residence');
            $table->string('regdate');
            $table->string('regno');
            $table->string('address');
            $table->string('qualifications');
            $table->string('speciality');
            $table->string('subspeciality'); 
            $table->string('mobile');
            $table->string('email');
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
		Schema::drop('doctor');
	}

}
