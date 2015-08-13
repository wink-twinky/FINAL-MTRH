<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmacyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pharmacy', function(Blueprint $table)
		{
			 $table->increments('id');
              $table->timestamps();
              $table->biginteger('filenumber');
              $table->text('diagnosis');
              $table->text('prescription');
              $table->text('medication');
              $table->text('servedby');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pharmacy');
	}

}
