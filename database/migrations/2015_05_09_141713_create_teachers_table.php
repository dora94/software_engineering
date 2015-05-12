<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teachers', function(Blueprint $table)
		{
			$table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('users');

            $table->integer('dept_id')->unsigned();
            $table->foreign('dept_id')->references('id')->on('departments');

            $table->string('degree',30);
            $table->boolean('dept_chief');

            $table->primary('teacher_id');
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
		Schema::drop('teachers');
	}

}
