<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ServiceController
class Services extends CI_Controller {

	public function index()
	{
		$data = array('kue' => 'sss' );
		return view('services',['posts '=> $data]);
	}
}
