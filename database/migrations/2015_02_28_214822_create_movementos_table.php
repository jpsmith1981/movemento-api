<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movementos', function(Blueprint $table)
		{
			$table->increments('id');
            // The Note To Be Left
            $table->text('note');
            $table->string('avatar')->nullable();

            // Location
            $table->decimal('latitude', 30, 7);
            $table->decimal('longitude', 30, 7);

            //User who made the Movemento
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            //Created and Updated Timestamps;
            $table->timestamps();

            //Allow for Soft Deleting
            $table->softDeletes();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movementos');
	}

}
