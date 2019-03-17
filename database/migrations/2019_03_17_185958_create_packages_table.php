<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 191)->nullable();
			$table->integer('vehicle_id')->nullable()->index('vehicle_id');
			$table->dateTime('package_start_time')->nullable();
			$table->dateTime('package_end_time')->nullable();
			$table->float('package_overtime_rate', 10, 0)->nullable();
			$table->float('package_rate', 10, 0)->nullable();
			$table->float('package_extra_fuel', 10, 0)->nullable();
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
		Schema::drop('packages');
	}

}
