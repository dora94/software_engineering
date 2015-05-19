<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecializedDisciplinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specializedDisciplines', function(Blueprint $table)
		{
			$table->integer('spec_id')->unsigned();
            $table->foreign('spec_id')->references('id')->on('specializations');

            $table->integer('disc_id')->unsigned();
            $table->foreign('disc_id')->references('id')->on('disciplines');

            $table->integer('semester');
            $table->tinyInteger('mandatory');
            $table->integer('credits');

            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');

            $table->primary(array('spec_id','disc_id'));

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
		Schema::drop('specializedDisciplines');
	}

}
