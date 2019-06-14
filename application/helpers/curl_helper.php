<?php

if ( ! function_exists('get_CURL'))
{
	function get_CURL($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($curl);
	  	return json_decode($result,true);
	}
}

