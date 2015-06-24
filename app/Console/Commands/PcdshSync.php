<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PcdshSync extends Command {
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'pcdsh:sync';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Sync new data from the project cars dedicated server';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		$sync     = new \App\Mattias\Sync;
		$response = $sync->run();
		$this->info( $response );
	}
}
