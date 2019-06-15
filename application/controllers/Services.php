<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ServiceController
class Services extends CI_Controller {

	public function index()
	{
		// photos
		// detail service
		$id = $this->db->escape($id);

		$photos = $this->db->query("SELECT * FROM service_photos WHERE service_id = $id");
		$service = $this->db->query("SELECT * FROM services WHERE id = $id");

		$data = array(
			'photos' => $photos,
			'services' => $service,
		);
		return view('services',['posts '=> $data]);
	}
}
