<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpMePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('helpMePosts',function($table){
				$table->increments('id');
				$table->integer('idUser');
				$table->string('userName');
				$table->string('subject');
				$table->string('content');
				$table->string('petName');
				$table->string('petImage')->nullable();
				$table->string('location');
				$table->string('contact');
				$table->boolean('status');
				$table->string('helper');
				$table->string('postType');
				$table->boolean('petType');
				$table->string('needWhatForHelp');
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
			Schema::drop('helpMePosts');
	}

}
