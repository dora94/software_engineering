<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grades', function(Blueprint $table)
		{
			$table->integer('stud_id')->unsigned();
            $table->integer('disc_id')->unsigned();
            $table->integer('grade');

            $table->foreign('stud_id')->references('stud_id')->on('students');
            $table->foreign('disc_id')->references('id')->on('disciplines');

            $table->primary(array('stud_id','disc_id'));
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
		Schema::drop('grades');
	}

}
