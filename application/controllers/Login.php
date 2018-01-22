<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('datalogin');
    }
 
    function index(){

        $this->load->view('login');
    }
 
    function check(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_petugas=$this->datalogin->auth_petugas($username,$password);
 
        if($cek_petugas->num_rows() > 0){ //jika login sebagai Petugas
                $data=$cek_petugas->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses Administrator
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('session_id',$data['idptg']);
                    $this->session->set_userdata('session_nama',$data['nmptg']);
                    $this->session->set_userdata('session_username',$data['username']);
                    $namalevel = "Administrator";
                    $this->session->set_userdata('session_level',$namalevel);
                    $this->session->set_userdata('session_foto',$data['foto']);
                    redirect('petugas/daftar');
 
                 } if($data['level']=='2'){ //Akses Karyawan
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('session_id',$data['idptg']);
                    $this->session->set_userdata('session_nama',$data['nmptg']);
                    $this->session->set_userdata('session_username',$data['username']);
                    $namalevel = "Karyawan";
                    $this->session->set_userdata('session_level',$data['level']);
                    $this->session->set_userdata('session_foto',$data['foto']);
                    redirect('perizinan/daftar');
                 } else {
                    redirect('login/logout');
                 }

        } else {
        	$data["salah"]='not'; //agar attribut "hidden" tidak bekerja ex="nothidden" (digabung)
        	$this->load->view('login',$data);
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}
