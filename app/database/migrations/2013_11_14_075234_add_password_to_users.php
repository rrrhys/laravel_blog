<?php

use Illuminate\Database\Migrations\Migration;

class AddPasswordToUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('users',function($table){
			$table->string('password', 60);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('users',function($table){
			$table->dropColumn('password');
		});
	}

}