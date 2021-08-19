<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Categorydetail extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');   
    }
	
	public function index($category)
	{
        $data['cate'] = $this->m_front->getcat($category)->result();
    }
	
}