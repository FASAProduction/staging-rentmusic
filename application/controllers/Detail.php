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

	public function dapat($id_alat_musik){
		$data['deta'] = $this->m_front->getting($id_alat_musik)->result();
		$this->load->view('main/detail', $data);
	}
}
