<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Thanks extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
		$this->load->helper('tanggal_helper');
        $this->load->model('m_front');
		$this->load->model('m_trans');
		$this->load->model('m_my');   
    }
	
	public function index()
	{	
		$data['judul'] = "Thank You | GM Musika Mini";
		$data['prosewa'] = $this->m_trans->data_sewa_satuan()->result();
		$data['prosewapaket'] = $this->m_trans->data_sewa_paket()->result();
		$this->load->view('main/transaction/thankyou', $data);
	}

	public function ty(){
		$data['judul'] = "Thank You | GM Musika Mini";
		$data['prosewa'] = $this->m_trans->data_sewa_satuan()->result();
		$this->load->view('main/transaction/thankyou', $data);
	}

	public function typ(){
		$data['judul'] = "Thank You | GM Musika Mini";
		$data['prosewapaket'] = $this->m_trans->data_sewa_paket()->result();
		$this->load->view('main/transaction/thankyou_paket', $data);
	}
}