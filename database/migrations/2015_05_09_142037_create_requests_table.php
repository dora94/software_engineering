<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requests', function(Blueprint $table)
		{
			$table->integer('stud_id')->unsigned();
            $table->foreign('stud_id')->references('stud_id')->on('students');

            $table->integer('disc_id')->unsigned();
            $table->foreign('disc_id')->references('id')->on('disciplines');

            $table->integer('rank');
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
		Schema::drop('requests');
	}

}
