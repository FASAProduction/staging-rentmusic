<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Myorder extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');   
    }
	
	public function index()
	{	
		$data['judul'] = "Pesanan Saya - GM Musika Mini";
		$data['pemesan'] = $this->m_front->data_sewa()->result();
		$data['hpemesan'] = $this->m_front->data_sewa()->num_rows();
		$this->load->view('main/sewa', $data);
	}
}
