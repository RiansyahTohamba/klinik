<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// HomeController
class Home extends CI_Controller {

	public function index()
	{
		//access token buat nayahmua.xyz
		//$accessToken = '5060990325.2313fd4.da9e82bf9a53439daf4056d3b3e82b07';
		//auth
		//https://api.instagram.com/oauth/authorize/?client_id=f656d3f0cef04b16b7c2fda94e6b6f98&redirect_uri=http://localhost:8080/klinikpuri/&response_type=token

		//clientId untuk nayahmua.xyz '2313fd4f68574201b8cf2aea81667431';
		//clientId untuk localhost 'f656d3f0cef04b16b7c2fda94e6b6f98';
		
		//dari pixelunion
		$photos = [];
		$data = array('photos' => $photos );
		return view('index',['data'=>$data]);
	}


	public function with_instagram()
	{
		$this->load->helper('curl');
		//access token buat nayahmua.xyz
		//$accessToken = '5060990325.2313fd4.da9e82bf9a53439daf4056d3b3e82b07';
		//auth
		//https://api.instagram.com/oauth/authorize/?client_id=f656d3f0cef04b16b7c2fda94e6b6f98&redirect_uri=http://localhost:8080/klinikpuri/&response_type=token

		//clientId untuk nayahmua.xyz '2313fd4f68574201b8cf2aea81667431';
		//clientId untuk localhost 'f656d3f0cef04b16b7c2fda94e6b6f98';
		
		//dari pixelunion
		$accessToken = '5060990325.1677ed0.1d50d3db82554786bee331eb11820644';
		$results = get_CURL("https://api.instagram.com/v1/users/self/media/recent/?access_token=$accessToken&count=3");
		$photos = [];
		foreach ($results['data'] as $photo){
			$photos[]= $photo['images']['thumbnail']['url'];
		}
		$data = array('photos' => $photos );
		return view('index',['data'=>$data]);
	}
}
