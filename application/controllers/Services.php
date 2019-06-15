<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ServiceController
class Services extends CI_Controller {

	public function show()
	{
		// photos
		// detail service
		$id = $this->db->escape($this->uri->segment('3'));

		$photos = $this->db->query("SELECT * FROM service_photos 
			WHERE service_id = $id 
			");
		$service = $this->db->query("SELECT * FROM services WHERE id = $id")->row();
		$services = $this->db->query("SELECT * FROM services");

		$data = array(
			'photos' => $photos,
			'service' => $service,
			'services' => $services,
		);
		return view('services',['data'=> $data]);
	}
}
