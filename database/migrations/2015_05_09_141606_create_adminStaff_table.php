<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('adminStaff', function(Blueprint $table)
		{
			$table->integer('staff_id')->unsigned();
            $table->primary('staff_id');
            $table->foreign('staff_id')->references('id')->on('users');

            $table->integer('dept_id')->unsigned();
            $table->foreign('dept_id')->references('id')->on('departments');


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
		Schema::drop('adminStaff');
	}

}
