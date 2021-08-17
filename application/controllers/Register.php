<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Register extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        //validasi jika user belum login
		
		$this->load->model('m_front'); 
	}
	
	public function index()
	{
		$data['judul'] = 'Register | GM Musika Mini';
		$this->load->view('register', $data);
	}

	public function pro(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
        $kartu_identitas = $this->input->post('kartu_identitas');
        $no_identitas = $this->input->post('no_identitas');
		$this->m_front->daft($username,$password,$nama_pelanggan,$alamat,$no_hp,$kartu_identitas,$no_identitas);
		$this->session->set_flashdata('notice', '<div class="alert alert-success"><strong>Mendaftar sukses!</strong> Silahkan login dengan detail login yang Anda berikan.</div>');
		$url = base_url();
        redirect($url);

	}
	
}
