<?php

namespace App\Http\Controllers;

use App\Models\GClient;

class ApiController extends Controller {

	protected $GClient;

	public function __construct(GClient $client) {
		$this->GClient = $client;
	}

	function index() {
		$data = $this->GClient->get('todos');
		$users = $this->GClient->get('users');
		return view('home', compact('data', 'users'));
	}

	function d($id) {
		$data = $this->GClient->get('todos/' . $id);
		$users = $this->GClient->get('users');
		return view('detail', compact('data', 'users'));
	}

	function delete($id) {
		$sc = $this->GClient->delete('todos/' . $id);
		return view('delete', compact('sc', 'id'));
	}

	function update($id) {
		$input = filter_input_array(INPUT_POST);
		$data = $this->GClient->put('todos/' . $id, ['json' => ['id' => $id, 'title' => $input['title'], 'userId' => $input['userId'], 'completed' => (isset($input['completed']) ? $input['completed'] : false)]]);
		$users = $this->GClient->get('users');
		return view('update', compact('data', 'users'));
	}

	function new() {
		$users = $this->GClient->get('users');
		return view('new', compact('users'));
	}

	function create() {
		$input = filter_input_array(INPUT_POST);
		$data = $this->GClient->post('todos/', ['json' => ['title' => $input['title'], 'userId' => $input['userId'], 'completed' => (isset($input['completed']) ? $input['completed'] : false)]]);
		return view('create', compact('data'));
	}

	function getUserInfo($id) {
		$data = $this->GClient->get('users/' . $id);
		return $data;
	}

}
