<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_front');
		$this->load->model('m_trans');
		$this->load->model('m_my');

	}
	
	public function index()
	{
		$data['judul'] = 'Login | GM Musika Mini';
		$this->load->view('login', $data);
	}

	function pro(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=md5(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));
 
        $cek=$this->m_front->data_login($username,$password);
                    if($cek->num_rows() > 0){
                            $data=$cek->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('ses_id',$data['id_pelanggan']);
							$this->session->set_userdata('ses_uname',$username);
                            $this->session->set_userdata('ses_pass',$password);
                            $this->session->set_userdata('ses_nama',$data['nama_pelanggan']);
                            $this->session->set_userdata('ses_alamat',$data['alamat']);
                            $this->session->set_userdata('ses_hp',$data['no_hp']);
                            $this->session->set_userdata('ses_card',$data['kartu_identitas']);
                            $this->session->set_userdata('ses_card_no',$data['no_identitas']);
							$url=base_url();
                            redirect($url);
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','<div class="alert alert-danger">Username Atau Password Salah!</div>');
                            redirect($url);
                    }
    }
 
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }
	
}