<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('lyrics')->nullable();
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
		Schema::drop('songs');
	}

}

// DB::table('songs')->insert(['title' => 'Boyfriend', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
// DB::table('songs')->insert(['title' => 'Be Alright', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
