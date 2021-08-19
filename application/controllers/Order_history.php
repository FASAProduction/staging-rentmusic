<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Order_history extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
		$this->load->helper('tanggal_helper');
        $this->load->model('m_front');   
    }
	
	public function index()
	{	
		$data['judul'] = "Pesanan Saya - GM Musika Mini";
		$data['hist'] = $this->m_front->data_sewa_selesai()->result();
		$data['hhist'] = $this->m_front->data_sewa_selesai()->num_rows();
		$this->load->view('main/my/history_sewa', $data);
	}
}
