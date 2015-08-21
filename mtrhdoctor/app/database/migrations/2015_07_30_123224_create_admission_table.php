<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admission', function(Blueprint $table)
		{     
			  $table->increments('id');
              $table->timestamps();
              $table->biginteger('filenumber');
              $table->text('admissiondate');
              $table->text('wing');
              $table->text('word');
              $table->text('bednumber');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admission');
	}

}
