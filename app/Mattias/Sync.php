<?php
/**
 * Created by PhpStorm.
 * User: mattias
 * Date: 2015-06-24
 * Time: 15:11
 */

namespace App\Mattias;

use GuzzleHttp\Client;

class Sync {
	protected $client;

	public function __construct() {
		$this->client = new Client( [
			'base_uri' => config( 'pcdsh.url' ) . '/api/',
			'timeout'  => 2.0,
		] );
	}

	public function run() {
		return $this->client->get( 'log/range', [ 'query' => [ 'offset' => -2, 'count' => 2 ] ] )->getBody();
	}
}