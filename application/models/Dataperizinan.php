<?php
defined('BASEPATH') OR exit('No direct script access allowed ORDER BY idiz DESC');
 
 
class Dataperizinan extends CI_Model{
	
	public function __construct()
        {
            $this->load->database();
        }
		
	public function daftar(){
		return $this->db->query('SELECT * FROM perizinan ORDER BY idiz DESC');
		//NB : Pakai script dibawah ini jika akam memakai filter Where
		//$query=$this->db->query('SELECT * FROM perizinan WHERE pengesah="Bupati" ORDER BY idiz DESC');
		//return $result=$query;
	}
	public function id(){
		$query=$this->db->query('select max(idiz) as maxid from perizinan');
		return $result=$query->row()->maxid;
	}
	
	public function add($data) {
		return $this->db->insert('perizinan',$data); 
    }
	
	
	public function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	public function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	function hapus($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	//Tambahan Query menampilkan data range (sekarang - deadline), notif hari ini dan deadline.
	public function notiftoday()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE sampaitgl = DATE_SUB(sampaitgl, INTERVAL 3 MONTH) || CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 MONTH) || CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 WEEK) ORDER BY idiz DESC');
	}

	public function tigabulanlagi()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() BETWEEN DATE_SUB(sampaitgl, INTERVAL 3 MONTH)  AND sampaitgl ORDER BY idiz DESC');
	}

	public function satubulanlagi()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() BETWEEN DATE_SUB(sampaitgl, INTERVAL 1 MONTH) AND sampaitgl ORDER BY idiz DESC');
	}

	public function satuminggulagi()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() BETWEEN  DATE_SUB(sampaitgl, INTERVAL 1 WEEK) AND sampaitgl ORDER BY idiz DESC');
	}

	public function deadline()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() = sampaitgl ORDER BY idiz DESC');
	}
}
?>
