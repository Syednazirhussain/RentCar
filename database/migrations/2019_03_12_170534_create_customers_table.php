<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('f_name', 191)->nullable();
			$table->string('l_name', 191)->nullable();
			$table->string('phone', 12)->nullable();
			$table->string('nic', 13)->nullable();
			$table->text('nic_front_image', 65535)->nullable();
			$table->text('nic_back_image', 65535)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('password', 191);
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
		Schema::drop('customers');
	}

}
