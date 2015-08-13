<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lab', function(Blueprint $table)
		{
			  te$table->increments('id');
              $table->timestamps();
              $table->biginteger('filenumber');
              $table->text('symptoms');
              $table->text('test');
              $table->text('observation');
              $table->text('hiv&aids');
              $table->text('resuilt');
              $table->text('technician');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lab');
	}

}
