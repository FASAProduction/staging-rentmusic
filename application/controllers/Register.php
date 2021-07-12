<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

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

	public function daftar(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama_pelanggan = $this->input->post('nama_pelanggan');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
        $kartu_identitas = $this->input->post('kartu_identitas');
        $no_identitas = $this->input->post('no_identitas');
		$this->m_front->daft($username,$password,$nama_pelanggan,$alamat,$no_hp,$kartu_identitas,$no_identitas);
		$this->session->set_flashdata('notice');
        redirect('login');

	}
	
}
