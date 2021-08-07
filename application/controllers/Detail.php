<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Detail extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');   
    }
	
	public function index()
	{	
	}

	public function satuan($id_alat_musik){
		$data['deta'] = $this->m_front->getting($id_alat_musik)->result();
		$this->load->view('main/deta', $data);
	}

	public function paket($id_paket){
		$data['detpak'] = $this->m_front->getting_packet($id_paket)->result();
		$this->load->view('main/detapak', $data);
	}
}
