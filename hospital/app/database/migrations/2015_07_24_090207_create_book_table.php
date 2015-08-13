<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book', function(Blueprint $table)
		{
			$table->increments('id');
            $table->timestamps();
            $table->biginteger('filenumber');
            $table->string('name');
            $table->string('visit2');
            $table->time('sunrise');
            $table->string('reason');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book');
	}

}
