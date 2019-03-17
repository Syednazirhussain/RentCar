<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('booking', function(Blueprint $table)
		{
			$table->foreign('package_id', 'booking_ibfk_1')->references('id')->on('packages')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('customer_id', 'booking_ibfk_2')->references('id')->on('customers')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('booking', function(Blueprint $table)
		{
			$table->dropForeign('booking_ibfk_1');
			$table->dropForeign('booking_ibfk_2');
		});
	}

}
