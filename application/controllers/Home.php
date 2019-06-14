<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// HomeController
class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('curl');
		//dari pixelunion
		$accessToken = '7486871755.1677ed0.6acb05b6f26646349e3658b0efdf5921';
		$results = get_CURL("https://api.instagram.com/v1/users/self/media/recent/?access_token=$accessToken&count=3");
		$photos = [];
		foreach ($results['data'] as $photo){
			$photos[]= $photo['images']['standard_resolution']['url'];
		}
		$data = array('photos' => $photos );
		return view('index',['data'=>$data]);
	}
}
