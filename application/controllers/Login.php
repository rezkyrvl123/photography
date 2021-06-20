<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_Login');       
    }

	public function index()
	{
		$this->load->view('V_Login');
	}
    
	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin=$this->M_Login->auth_admin($username,$password);
        // $cek_penjual=$this->M_Login->auth_penjual($username,$password);
        // $cek_pembeli=$this->M_Login->auth_pembeli($username,$password);
 
        if($cek_admin->num_rows() > 0){
            $data=$cek_admin->row_array();
        
            $this->session->set_userdata('login',TRUE);
            $this->session->set_userdata('id',$data['id_admin']);
            $this->session->set_userdata('nama',$data['nama_admin']);
            $this->session->set_userdata('hak_akses','Administrator');
            
            echo $this->session->set_flashdata('sukses','Login Sukses! Selamat Datang '+$data['nama_admin']+'!');
            redirect('Dashboard');
        }
        else{
            echo $this->session->set_flashdata('gagal','Username Atau Password Salah');
            redirect('Halaman_Utama');
        }
    }
}