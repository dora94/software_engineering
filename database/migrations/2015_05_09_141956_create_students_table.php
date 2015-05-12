<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->integer('stud_id')->unsigned();
            $table->foreign('stud_id')->references('id')->on('users');

            $table->integer('group1');
            $table->integer('group2');

            $table->integer('spec1_id')->unsigned();
            $table->foreign('spec1_id')->references('id')->on('specializations');

            $table->integer('spec2_id')->unsigned();
            $table->foreign('spec2_id')->references('id')->on('specializations');

            $table->integer('spec1_year');
            $table->integer('spec2_year');

            $table->integer('curriculum1_id')->unsigned();
            $table->integer('curriculum2_id')->unsigned();

            $table->foreign('curriculum1_id')->references('id')->on('curriculums');
            $table->foreign('curriculum2_id')->references('id')->on('curriculums');
            $table->primary('stud_id');
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
		Schema::drop('students');
	}

}
