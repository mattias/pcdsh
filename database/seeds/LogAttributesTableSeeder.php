<?php

use Illuminate\Database\Seeder;

class LogAttributesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory( 'App\LogAttribute', 50 )->create()->each( function ( $u ) {
			$u->logs()->save( factory( 'App\Log' )->make() );
		} );
	}
}
