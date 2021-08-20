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
		$this->load->model('m_trans');
		$this->load->model('m_my');   
    }
	
	public function index()
	{}

	public function satuan($id_alat_musik){
		$data['deta'] = $this->m_front->getting($id_alat_musik)->result();
		$data['pega'] = $this->m_trans->gawai()->result();
		$this->load->view('main/deta', $data);
	}

	public function paket($id_paket){
		$data['detpak'] = $this->m_front->getting_packet($id_paket)->result();
		$data['pega'] = $this->m_trans->gawai()->result();
		$this->load->view('main/detapak', $data);
	}

	public function checkout(){
		$kode_penyewaan = $this->input->post('kode_penyewaan');
		$id_alat_musik = $this->input->post('id_alat_musik');
		$tgl_pemesanan = $this->input->post('tgl_pemesanan');
		$tgl_jatuh_tempo = $this->input->post('tgl_jatuh_tempo');
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
		$this->m_trans->check($kode_penyewaan,$id_alat_musik,$tgl_pemesanan,$tgl_jatuh_tempo,$id_pelanggan,$id_paket,$id_pegawai,$jumlah,$jumlah_hari,$jumlah_hari_telat,$denda,$total_bayar,$status_bayar,$status_sewa);
        redirect('checkout');
	}
}
