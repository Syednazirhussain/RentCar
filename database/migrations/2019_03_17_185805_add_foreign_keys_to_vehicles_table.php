<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicles', function(Blueprint $table)
		{
			$table->foreign('vendor_id', 'vehicles_ibfk_1')->references('id')->on('vendors')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('vehicle_type_id', 'vehicles_ibfk_2')->references('id')->on('vehicle_type')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicles', function(Blueprint $table)
		{
			$table->dropForeign('vehicles_ibfk_1');
			$table->dropForeign('vehicles_ibfk_2');
		});
	}

}
