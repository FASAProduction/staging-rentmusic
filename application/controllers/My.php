<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class My extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');
		$this->load->model('m_trans');
		$this->load->model('m_my');   
    }
	
	public function index()
	{	
		$data['judul'] = "Dashboard - GM Musika Mini";
		$data['pemesan'] = $this->m_front->data_sewa()->result();
		$data['hpemesan'] = $this->m_front->data_sewa()->num_rows();
		$this->load->view('main/my/dasbor', $data);
	}
}
