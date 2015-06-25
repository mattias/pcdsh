<?php

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory( 'App\Log', 10 )->create()->each( function ( $log ) {
			$log->log_attribute()->save( factory( 'App\LogAttribute' )->make() );
		} );
	}
}
