<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// informationController
class Information extends CI_Controller {

	public function show()
	{
		// photos
		// detail information
		$id = $this->db->escape($this->uri->segment('3'));

		$information = $this->db->query("SELECT * FROM informations WHERE id = $id")->row();

		$data = array(
			'information' => $information,
		);
		return view('informations',['data'=> $data]);
	}
}
