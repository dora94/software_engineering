<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumDisciplinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curriculumDisciplines', function(Blueprint $table)
		{
			$table->integer('curriculum_id')->unsigned();
            $table->foreign('curriculum_id')->references('id')->on('curriculums');

            $table->integer('disc_id')->unsigned();
            $table->foreign('disc_id')->references('id')->on('disciplines');

            $table->primary(array('curriculum_id','disc_id'));

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
		Schema::drop('curriculumDisciplines');
	}

}
