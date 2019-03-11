<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGeneralInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('general_information', function(Blueprint $table)
		{
			$table->string('name', 191)->nullable();
			$table->string('code', 20)->primary();
			$table->string('short_name', 191)->nullable();
			$table->string('title', 191)->nullable();
			$table->text('title_description', 65535)->nullable();
			$table->text('about_description')->nullable();
			$table->string('logo', 191)->nullable();
			$table->text('footer_description')->nullable();
			$table->string('helpline', 191)->nullable();
			$table->string('contact', 191)->nullable();
			$table->text('address')->nullable();
			$table->string('email', 191)->nullable();
			$table->text('instagram', 65535)->nullable();
			$table->text('pinterest', 65535)->nullable();
			$table->text('twitter', 65535)->nullable();
			$table->text('youtube', 65535)->nullable();
			$table->text('linkdin', 65535)->nullable();
			$table->text('facebook', 65535)->nullable();
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
		Schema::drop('general_information');
	}

}
