<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// HomeController
class Home extends CI_Controller {

	public function index()
	{
		$data = array('kue' => 'sss' );
		return view('index',['posts '=> $data]);
	}
}
