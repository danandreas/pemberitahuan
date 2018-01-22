<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Dataload extends CI_Model{
	
	public function __construct()
        {
            $this->load->database();
            $this->load->helper();
        }
	
    public static function tgl_indonesia($date){
		$BulanIndo = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
					
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
									
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
	}

	public static function tambahan_link(){
		$th4 = date("Y");
		$th2 = date("y");
		$bln = date("m");
		$tgl = date("d");
		$kata1 = "pb";
		$kata2 = "fd";
		$ubahlink = $tgl.$kata1.$bln.$kata2.$th2; //total 10 -> tambahan data sebelum link md5(id)
		return($ubahlink);
	}

	public static function footer(){
		date_default_timezone_set('Asia/Jakarta');
		$tahun = date("Y");
		$tulisanfooter = "Copyright &copy; ".$tahun." PT. Dan Andreas";
		return($tulisanfooter);
	}

	public function notiftoday()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() = DATE_SUB(sampaitgl, INTERVAL 3 MONTH) || CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 MONTH) || CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 WEEK)')->num_rows();
	}

	public function tigabulanlagi()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() BETWEEN DATE_SUB(sampaitgl, INTERVAL 3 MONTH)  AND sampaitgl')->num_rows();
	}

	public function satubulanlagi()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() BETWEEN DATE_SUB(sampaitgl, INTERVAL 1 MONTH) AND sampaitgl')->num_rows();
	}

	public function satuminggulagi()
	{	
		
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() BETWEEN  DATE_SUB(sampaitgl, INTERVAL 1 WEEK) AND sampaitgl')->num_rows();
	
	}

	public function deadline()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() = sampaitgl ORDER BY idiz DESC')->num_rows();
	}

	//Notifikasi Drop-down atas
	public function mini_deadline()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() = sampaitgl ORDER BY idiz DESC LIMIT 5');
	}
	public function mini_notiftoday()
	{	
		return $this->db->query('SELECT * FROM perizinan WHERE CURDATE() = DATE_SUB(sampaitgl, INTERVAL 3 MONTH) || CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 MONTH) || CURDATE() = DATE_SUB(sampaitgl, INTERVAL 1 WEEK) ORDER BY idiz DESC LIMIT 5');
	}
}
?>
