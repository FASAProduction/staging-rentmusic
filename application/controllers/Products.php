<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Products extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');   
    }
	
	public function index()
	{	
		$data['judul'] = "Produk - GM Musika Mini";
		$data['alatm'] = $this->m_front->data_almus()->result();
		$data['alatmht'] = $this->m_front->data_almus()->num_rows();
		$data['pak'] = $this->m_front->data_almus_paket()->result();
		$data['pakht'] = $this->m_front->data_almus_paket()->num_rows();
		$this->load->view('main/produk', $data);
	}
}