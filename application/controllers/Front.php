<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Front extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');   
    }
	
	public function index()
	{	
		$data['judul'] = "GM Musika Mini";
		$data['alatm'] = $this->m_front->data_almus()->result();
		$data['alatlimit'] = $this->m_front->data_almus_limit()->result();
		$data['alatlimited'] = $this->m_front->data_almus_limited()->result();
		$data['alatmht'] = $this->m_front->data_almus()->num_rows();
		$data['alatmelek'] = $this->m_front->data_almus_elektrik()->result();
		$data['alatmelekht'] = $this->m_front->data_almus_elektrik()->num_rows();
		$data['pak'] = $this->m_front->data_almus_paket()->result();
		$data['pakht'] = $this->m_front->data_almus_paket()->num_rows();
		$data['dt_sewa'] = $this->m_front->data_sewaa()->result();
		$this->load->view('main/front', $data);
	}

	public function checkout(){
		$kode_penyewaan = $this->input->post('kode_penyewaan');
		$id_alat_musik = $this->input->post('id_alat_musik');
		$tgl_pemesanan = $this->input->post('tgl_pemesanan');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_paket = $this->input->post('id_paket');
        $id_pegawai = $this->input->post('id_pegawai');
        $jumlah = $this->input->post('jumlah');
		$jumlah_hari = $this->input->post('jumlah_hari');
		$jumlah_hari_telat = $this->input->post('jumlah_hari_telat');
		$denda = $this->input->post('denda');
		$total_bayar = $this->input->post('total_bayar');
		$status_bayar = $this->input->post('status_bayar');
		$status_sewa = $this->input->post('status_sewa');
		$this->m_front->check($kode_penyewaan,$id_alat_musik,$tgl_pemesanan,$id_pelanggan,$id_paket,$id_pegawai,$jumlah,$jumlah_hari,$jumlah_hari_telat,$denda,$total_bayar,$status_bayar,$status_sewa);
        redirect('checkout');
	}

	public function dapat($id_alat_musik){
		$data['deta'] = $this->m_front->getting($id_alat_musik)->result();
		$this->load->view('main/detail', $data);
	}
}
