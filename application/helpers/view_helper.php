<?php
use Jenssegers\Blade\Blade;
if (!function_exists('view')) {
	function view($view,$data = []){
		$path = APPPATH.'views';
		$blade = new Blade($path, $path .'/cache');
		echo $blade->make($view,$data);
	}
}

if ( ! function_exists('asset_url()'))
{
	function asset_url()
	{
	  return base_url().'assets/';
	}
}