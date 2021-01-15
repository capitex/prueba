<?php

namespace App\Models;

use GuzzleHttp\Client;

class GClient {

	protected $Gclient;

	public function __construct() {
		$this->Gclient = new Client(['base_uri'=>'https://jsonplaceholder.typicode.com']);
	}

	public function get($url) {
		return json_decode($this->Gclient->request('GET', $url)->getBody()->getContents());
	}

	public function post($url) {
		return json_decode($this->Gclient->request('POST', $url)->getBody()->getContents());
	}

	public function put($url, $data) {
		return json_decode($this->Gclient->request('PUT', $url, $data)->getBody()->getContents());
	}

	public function delete($url) {
		return json_decode($this->Gclient->request('DELETE', $url)->getStatusCode());
	}

}
