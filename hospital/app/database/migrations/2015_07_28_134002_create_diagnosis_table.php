<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiagnosisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('diagnosis', function(Blueprint $table)
		{
			  $table->increments('id');
              $table->timestamps();
              $table->biginteger('filenumber');
              $table->text('diagnosis');
              $table->text('prescription');
              $table->text('comments');
              $table->text('doctor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('diagnosis');
	}

}
