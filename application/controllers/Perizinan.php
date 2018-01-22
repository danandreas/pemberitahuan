<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perizinan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if ($this->session->userdata('akses') !== '2') {
			echo "<script language=javascript>alert('Anda tidak mempunyai hak akses untuk halaman ini! Silahkan login untuk mengakses halaman yang anda tuju.');</script>";
			redirect('login/logout','refresh');
		}

		$this->load->model('dataperizinan');
		$this->load->helper('url');
	}

	public function daftar()
	{	
		
		$data['perizinan'] = $this->dataperizinan->daftar()->result();
		
		$data['title'] = "Daftar Perizinan";
		$this->load->view('struktur/daftar_atas',$data);
		$this->load->view('perizinan/daftarizin',$data);
		$this->load->view('struktur/daftar_bawah');
	}
	
	public function input()
	{
		
		$maxid=$this->dataperizinan->id();
		$noUrut = (int) substr($maxid,2,8);
		$noUrut++;
		$newID = "IZ".sprintf("%08s",$noUrut);
		
		$data['title'] = "Input Perizinan";
		$data["idbaru"] = $newID;
		$data['tglsekarang'] = date("Y-m-d");
		
		$this->load->view('struktur/input_atas',$data);
		$this->load->view('perizinan/inputizin',$data);
		$this->load->view('struktur/input_bawah');
	}
	
	public function create()
	{
		$data = array(
			'idiz' => $this->input->post('idiz'),
			'nmdok' => $this->input->post('nmdok'),
			'nodok' => $this->input->post('nodok'),
			'pengesah' => $this->input->post('pengesah'),
			'tglsah' => $this->input->post('tglsah'),
			'lamanya' => $this->input->post('lamanya'),
			'sampaitgl' => $this->input->post('sampaitgl'),
			'status' => $this->input->post('status'),
			'keterangan' => $this->input->post('keterangan')
		);
		
		$this->dataperizinan->add($data);
		redirect('perizinan/daftar');
	}	
	
	public function edit($idiz)
	{
		$data['title'] = "Edit Perizinan";
		
		//enkripsi link
		$getid = $idiz; //data diambil dari kiriman form -> Get id
		$id_decrypt = substr($getid,10); //10 data depan tidak tampil, sehingga hanya md5(id) saja agar bisa dicocokkan dengan id database

		$where = array('md5(idiz)' => $id_decrypt);
		$data['perizinan'] = $this->dataperizinan->edit($where,'perizinan')->result();
		
		$this->load->view('struktur/input_atas',$data);
		$this->load->view('perizinan/editizin',$data);
		$this->load->view('struktur/input_bawah');
	}
	
	public function update()
	{
		
		$idiz = $this->input->post('idiz');
		
		$data = array(
			'nmdok' => $this->input->post('nmdok'),
			'nodok' => $this->input->post('nodok'),
			'pengesah' => $this->input->post('pengesah'),
			'tglsah' => $this->input->post('tglsah'),
			'lamanya' => $this->input->post('lamanya'),
			'sampaitgl' => $this->input->post('sampaitgl'),
			'status' => $this->input->post('status'),
			'keterangan' => $this->input->post('keterangan')
		);
		
		$where = array(
			'idiz' => $idiz
		);
		
		$this->dataperizinan->update($where,$data,'perizinan');
		redirect('perizinan/daftar');
	}

	public function detail($idiz)
	{
		$data['title'] = "Detail Perizinan";
		
		//enkripsi link
		$getid = $idiz; //data diambil dari kiriman form -> Get id
		$id_decrypt = substr($getid,10); //10 data depan tidak tampil, sehingga hanya md5(id) saja agar bisa dicocokkan dengan id database

		$where = array('md5(idiz)' => $id_decrypt);
		$data['perizinan'] = $this->dataperizinan->edit($where,'perizinan')->result();
		
		$this->load->view('struktur/input_atas',$data);
		$this->load->view('perizinan/detailizin',$data);
		$this->load->view('struktur/input_bawah');
	}
	
	public function hapus($idiz){
		
		//enkripsi link
		$getid = $idiz; //data diambil dari kiriman form -> Get id
		$id_decrypt = substr($getid,10); //10 data depan tidak tampil, sehingga hanya md5(id) saja agar bisa dicocokkan dengan id database

		$where = array(
			'md5(idiz)' => $id_decrypt
		);
		
		$this->dataperizinan->hapus($where,'perizinan');
		redirect('perizinan/daftar');
	}

	//Tambahan Query menampilkan data range (sekarang - deadline), notif hari ini dan deadline.
	public function notiftoday()
	{	
		
		$data['perizinan'] = $this->dataperizinan->notiftoday()->result();		
		$data['title'] = "Pemberitahuan Hari Ini";
		
		$this->load->view('struktur/daftar_atas',$data);
		$this->load->view('perizinan/daftarizin',$data);
		$this->load->view('struktur/daftar_bawah');
	}

	public function tigabulanlagi()
	{	
		
		$data['perizinan'] = $this->dataperizinan->tigabulanlagi()->result();		
		$data['title'] = "3 Bulan Lagi Deadline";
		
		$this->load->view('struktur/daftar_atas',$data);
		$this->load->view('perizinan/daftarizin',$data);
		$this->load->view('struktur/daftar_bawah');
	}

	public function satubulanlagi()
	{	
		
		$data['perizinan'] = $this->dataperizinan->satubulanlagi()->result();		
		$data['title'] = "1 Bulan Lagi Deadline";
		
		$this->load->view('struktur/daftar_atas',$data);
		$this->load->view('perizinan/daftarizin',$data);
		$this->load->view('struktur/daftar_bawah');
	}

	public function satuminggulagi()
	{	
		
		$data['perizinan'] = $this->dataperizinan->satuminggulagi()->result();		
		$data['title'] = "1 Minggu Lagi Deadline";
		
		$this->load->view('struktur/daftar_atas',$data);
		$this->load->view('perizinan/daftarizin',$data);
		$this->load->view('struktur/daftar_bawah');
	}

	public function deadline()
	{	
		
		$data['perizinan'] = $this->dataperizinan->deadline()->result();		
		$data['title'] = "Deadline Hari Ini";
		
		$this->load->view('struktur/daftar_atas',$data);
		$this->load->view('perizinan/daftarizin',$data);
		$this->load->view('struktur/daftar_bawah');
	}
}
