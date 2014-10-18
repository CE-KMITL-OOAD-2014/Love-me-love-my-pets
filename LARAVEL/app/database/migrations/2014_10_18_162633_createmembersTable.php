<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatemembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members',function($table){
				$table->increments('idUser');
				$table->string('userName',10);
				$table->string('password',15);
				$table->string('realNameSurName',40);
				$table->integer('age');
				$table->string('address',140);
				$table->string('email',40);
				$table->string('petName',20);
				$table->string('petImage',20);
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
		Schema::drop('members');
	}

}
