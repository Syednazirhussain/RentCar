<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehicleHasSpecificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicle_has_specification', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vehicle_id')->nullable()->index('vehicle_id');
			$table->integer('vehicle_specification_id')->nullable()->index('vehicle_specification_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicle_has_specification');
	}

}
