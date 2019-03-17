<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booking', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('customer_id')->nullable()->index('customer_id');
			$table->integer('package_id')->nullable()->index('package_id');
			$table->date('booking_date')->nullable();
			$table->text('pickup_time', 65535)->nullable();
			$table->text('dropoff_time', 65535)->nullable();
			$table->string('pickup_address', 191)->nullable();
			$table->string('dropoff_address', 191)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booking');
	}

}
