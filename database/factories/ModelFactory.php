<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define( App\User::class, function ( $faker ) {
	return [
		'name'           => $faker->name,
		'email'          => $faker->email,
		'password'       => str_random( 10 ),
		'remember_token' => str_random( 10 ),
	];
} );

$factory->define( App\Log::class, function ( $faker ) {
	$names = [
		'Lap',
		'State',
		'Sector',
		'StateChanged',
		'Results',
		'PlayerLeft',
		'PlayerJoined',
		'Authenticated',
		'SessionSetup',
		'ParticipantCreated',
		'CutTrackStart',
		'CutTrackEnd',
		'Impact',
		'SessionDestroyed'
	];

	return [
		'time'          => $faker->unixTime(),
		'name'          => $names[ $faker->randomNumber( count( $names ) ) ],
		'refid'         => $faker->randomNumber(),
		'participantid' => $faker->randomNumber( 64 ),
	];
} );

$factory->define( App\LogAttribute::class, function ( $faker ) {
	$keys = [ 'Lap', 'RacePosition', 'IsMainBranch', 'LapTime', 'Sector' ];
	$log_id = App\Log::orderByRaw("RAND()")->get()->first()->id();

	return [
		'log_id' => $log_id,
		'key'    => $keys[ $faker->randomNumber( count( $keys ) ) ],
		'value'  => $faker->randomNumber(),
	];
} );
