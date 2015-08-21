<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClearanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clearance', function(Blueprint $table)
		{
			 $table->increments('id');
              $table->timestamps();
              $table->biginteger('filenumber');
              $table->text('clearancedate');
              $table->text('comments');
              $table->text('clearedby');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clearance');
	}

}
