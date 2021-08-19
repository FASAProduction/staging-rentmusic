<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Myorder extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
		$this->load->helper('tanggal_helper');
        $this->load->model('m_trans');   
    }
	
	public function index()
	{	
		$data['judul'] = "Pesanan Saya - GM Musika Mini";
		$data['pemesan'] = $this->m_trans->data_sewa_satuan()->result();
		$data['hpemesan'] = $this->m_trans->data_sewa_satuan()->num_rows();
		$data['pempaket'] = $this->m_trans->data_sewa_paket()->result();
		$data['hpempaket'] = $this->m_trans->data_sewa_paket()->num_rows();
		$this->load->view('main/my/sewa', $data);
	}
}
