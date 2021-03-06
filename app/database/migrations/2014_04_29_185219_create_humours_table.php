<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumoursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('humours', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id');
			$table->text('humour_content')->nullable();
			$table->string('image_path')->nullable();
			$table->integer('state')->default(2);

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('humours');
	}

}
