<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// HomeController
class Home extends CI_Controller {

	public function schedule()
	{
		$data = array();
		return view('schedule',['data'=>$data]);
	}
	private function get_instagram_photos(){
		$this->load->helper('curl');
		//token dari pixelunion
		$accessToken = '7486871755.1677ed0.6acb05b6f26646349e3658b0efdf5921';
		$results = get_CURL("https://api.instagram.com/v1/users/self/media/recent/?access_token=$accessToken&count=3");
		$photos = [];
		foreach ($results['data'] as $photo){
			$photos[]= $photo['images']['standard_resolution']['url'];
		}
		return $photos;
	}
	public function index()
	{
		$informations = $this->db->query("SELECT * FROM informations LIMIT 3");
		$data = array(
			'photos' => $this->get_instagram_photos(),
			'informations' => $informations,
		);
		return view('index',['data'=>$data]);
	}

}
