<?php 
class Model_imt extends CI_Model{

	function simpanData($data, $tabel){
		$this->db->insert($tabel,$data);
	}

	function ambilInterpretasi(){
		$query = $this->db->query("SELECT interpretasi, count(*) as number FROM user GROUP BY interpretasi");
		return $query->result();
	}

	function jumlahData(){
		$query = $this->db->query("SELECT * FROM user");
		return $query->num_rows();
	}
}