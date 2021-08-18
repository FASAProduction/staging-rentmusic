<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class MyAccount extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');   
    }
	
	public function index()
	{	
		$data['judul'] = "Dashboard - GM Musika Mini";
		$data['customer'] = $this->m_front->customer()->result();
		$this->load->view('main/account', $data);
	}

    public function acc_edit(){
		$id_pelanggan = $this->input->post('id_pelanggan');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$password2 = $this->input->post('password2');
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
        $kartu_identitas = $this->input->post('kartu_identitas');
        $no_identitas = $this->input->post('no_identitas');
		if($password==""){
			$pas = $password2;
		}else{
			$pas = md5($password);
		}
        $this->m_front->edit_acc($id_pelanggan,$username,$pas,$nama_pelanggan,$alamat,$no_hp,$kartu_identitas,$no_identitas);
        $this->session->set_flashdata('edit', '<div class="alert alert-success"><b>Sukses!</b> Perubahan akun disimpan.</div>');
        redirect('myaccount');
    }
}