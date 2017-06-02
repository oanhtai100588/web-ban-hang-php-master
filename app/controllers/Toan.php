<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('password_generate');
	}
	public function index()
	{
		echo $this->password_generate->encode("123456");
	}
}