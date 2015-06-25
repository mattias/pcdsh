<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'logs', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->time( 'time' );
			$table->string( 'name' );
			$table->integer( 'refid' )->nullable();
			$table->integer( 'participantid' )->nullable();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop( 'logs' );
	}
}
