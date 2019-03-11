<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehicleHasSpecificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehicle_has_specification', function(Blueprint $table)
		{
			$table->foreign('vehicle_id', 'vehicle_has_specification_ibfk_1')->references('id')->on('vehicles')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('vehicle_specification_id', 'vehicle_has_specification_ibfk_2')->references('id')->on('vehicle_specifications')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehicle_has_specification', function(Blueprint $table)
		{
			$table->dropForeign('vehicle_has_specification_ibfk_1');
			$table->dropForeign('vehicle_has_specification_ibfk_2');
		});
	}

}
