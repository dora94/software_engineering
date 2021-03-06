<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{

			$table->increments('id');
            $table->string('user',20);
            $table->string('firstname',20);
            $table->string('lastname',20);
			$table->string('password', 60);
            $table->string('email',50);
            $table->string('accounttype',20);
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}

}
