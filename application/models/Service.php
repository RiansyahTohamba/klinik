
<?php
class Service extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
 	public function count_doctor($service_id)
    {
    	$count =  $this->db->query("SELECT COUNT(*) as count FROM services JOIN doctors 
    		WHERE services.id = $service_id
    		AND services.id = doctors.id")[0]['count'];
    	return $count;
    }
    public function schedules($service_id)
    {
    	// dokter apa saja yang ada pada service
    	// lalu cari jadwal dokternya
    	// kalau tidak ada dokter nya ga usah searching
   		return $this->db->query("SELECT * FROM services JOIN doctors 
    		WHERE services.id = $service_id
    		AND services.id = doctors.id")->result();
    }   

}