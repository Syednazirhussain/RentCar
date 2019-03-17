<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('packages', function(Blueprint $table)
		{
			$table->foreign('vehicle_id', 'packages_ibfk_1')->references('id')->on('vehicles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('packages', function(Blueprint $table)
		{
			$table->dropForeign('packages_ibfk_1');
		});
	}

}
