<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogAttributesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'log_attributes', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->integer( 'log_id' )->unsigned();
			$table->string( 'key' );
			$table->string( 'value' );
			$table->foreign( 'log_id' )->reference( 'id' )->on( 'logs' )->onDelete( 'cascade' );
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop( 'log_attributes' );
	}
}
