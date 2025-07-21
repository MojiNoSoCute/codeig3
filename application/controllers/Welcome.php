<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('test/hello');
	}

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('MyData');
	}

	public function hello()
	{
		// $book_data["books"] = array("Java", "PHP", "Python", "Kotlin");
		// $data['name'] = $this->MyData->showName();;
		// $data['email'] = "674259013@webmail.npru.ac.th";

		$data['query'] = $this->MyData->getAllProducts();

		$this->load->view('welcome_message', $data);

		// echo print_r(json_encode($book_data));
		// $this->load->view('welcome_message', $data);
		// 	$this->load->view('welcome_message');
		// 	$this->load->view('test/Hello');
		// 	$this->load->view('test/Hello');
		// 	$this->load->view('welcome_message');
	}
}
