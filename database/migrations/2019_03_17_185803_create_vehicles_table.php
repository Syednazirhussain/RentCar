<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 191)->nullable();
			$table->string('vehicle_number', 191)->nullable();
			$table->text('vehicle_images', 65535)->nullable();
			$table->integer('model')->nullable();
			$table->integer('vehicle_type_id')->nullable()->index('vehicle_type_id');
			$table->integer('vendor_id')->nullable()->index('vendor_id');
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
		Schema::drop('vehicles');
	}

}
