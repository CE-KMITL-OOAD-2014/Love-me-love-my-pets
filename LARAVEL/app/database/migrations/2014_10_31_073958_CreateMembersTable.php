<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members',function($table){
				$table->increments('id');
				$table->string('userName');
				$table->string('password');
				$table->string('realNameSurName');
				$table->integer('age');
				$table->string('address');
				$table->string('email');
				$table->string('petName');
				$table->string('petImage');
				$table->string('profilePic');
				$table->timestamps();
				$table->rememberToken();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('members');
	}

}
