<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecvGrantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recvGrants', function(Blueprint $table)
		{
			$table->integer('stud_id')->unsigned();
            $table->foreign('stud_id')->references('stud_id')->on('students');

            $table->integer('grant_id')->unsigned();
            $table->foreign('grant_id')->references('id')->on('grants');

            $table->primary(array('stud_id','grant_id'));
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
		Schema::drop('recvGrants');
	}

}
