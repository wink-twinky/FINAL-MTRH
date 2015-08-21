<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment', function(Blueprint $table)
		{
			  $table->increments('id');
              $table->timestamps();
              $table->biginteger('filenumber');
              $table->text('consultationfee');
              $table->text('medicationfee');
              $table->text('admissionfee');
              $table->text('totalcharges');
              $table->text('paid');
              $table->text('balance');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payment');
	}

}
