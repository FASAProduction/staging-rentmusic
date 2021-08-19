<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Checkout extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->helper('rupiah_helper');
        $this->load->model('m_front');
		$this->load->model('m_trans');   
    }
	
	public function index()
	{	
		$data['judul'] = "Checkout | GM Musika Mini";
		$data['hacheck'] = $this->m_trans->data_checkout()->result();
		$data['peg'] = $this->m_trans->gawai()->result();
		$this->load->view('main/transaction/cekot', $data);
	}

	public function update_hari(){
		$id_pemesanan = $this->input->post('id_pemesanan');
		$jumlah_hari = $this->input->post('jumlah_hari');
		$total_bayar = $this->input->post('total_bayar');
		$this->m_trans->day_change($id_pemesanan,$jumlah_hari,$total_bayar);
		redirect('checkout');
	}

	public function selesai(){
		$id_pemesanan = $this->input->post('id_pemesanan');
		$kode_penyewaan = $this->input->post('kode_penyewaan');
		$id_alat_musik = $this->input->post('id_alat_musik');
		$tgl_pemesanan = $this->input->post('tgl_pemesanan');
		$id_pelanggan = $this->input->post('id_pelanggan');
		$id_paket = $this->input->post('id_paket');
        $id_pegawai = $this->input->post('id_pegawai');
        $jumlah = $this->input->post('jumlah');
		$jumlah_hari = $this->input->post('jumlah_hari');
		$tgl_jatuh_tempo = date('Y-m-d', strtotime($tgl_pemesanan.' + '.$jumlah_hari.' Days'));
		$jumlah_hari_telat = $this->input->post('jumlah_hari_telat');
		$denda = $this->input->post('denda');
		$total_bayar = $this->input->post('total_bayar');
		$status_bayar = $this->input->post('status_bayar');
		$status_sewa = $this->input->post('status_sewa');
		$this->m_trans->proselesai($id_pemesanan,$kode_penyewaan,$id_alat_musik,$tgl_pemesanan,$tgl_jatuh_tempo,$id_pelanggan,$id_paket,$id_pegawai,$jumlah,$jumlah_hari,$jumlah_hari_telat,$denda,$total_bayar,$status_bayar,$status_sewa);
        redirect('thanks');
	}
}
