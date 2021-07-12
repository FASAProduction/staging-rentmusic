<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Dashboard extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');   
    }
	
	public function index()
	{	
		$data['judul'] = "GM Musika Mini";
		$data['pemesan'] = $this->m_front->data_sewa()->result();
		$this->load->view('main/dasbor', $data);
	}
}
