<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_trans extends CI_Model{
    function data_checkout(){
        $pelanggan = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM penyewaan
        JOIN alat_musik ON alat_musik.id_alat_musik=penyewaan.id_alat_musik
        JOIN daftar_paket ON daftar_paket.id_paket=penyewaan.id_paket
        WHERE id_pelanggan='$pelanggan' AND status_sewa='Akan Sewa'");
        return $query;
    }

    function day_change($id_pemesanan,$jumlah_hari,$total_bayar){
		$haschecke = $this->db->query("UPDATE penyewaan SET 
        jumlah_hari='$jumlah_hari',
        total_bayar='$total_bayar'
        WHERE id_pemesanan='$id_pemesanan'");
		return $haschecke;
	}

    function data_sewa_selesai(){
        $pe = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM penyewaan
        JOIN alat_musik ON alat_musik.id_alat_musik=penyewaan.id_alat_musik
        WHERE id_pelanggan='$pe' AND status_sewa='Selesai'");
        return $query;
    }

    function proselesai($id_pemesanan,$kode_penyewaan,$id_alat_musik,$tgl_pemesanan,$tgl_jatuh_tempo,$id_pelanggan,$id_paket,$id_pegawai,$jumlah,$jumlah_hari,$jumlah_hari_telat,$denda,$total_bayar,$status_bayar,$status_sewa){
		$haschecked = $this->db->query("UPDATE penyewaan SET
        kode_penyewaan='$kode_penyewaan',
        id_alat_musik='$id_alat_musik',
        tgl_pemesanan='$tgl_pemesanan',
        tgl_jatuh_tempo='$tgl_jatuh_tempo',
        id_pelanggan='$id_pelanggan',
        id_paket='$id_paket',
        id_pegawai='$id_pegawai',
        jumlah='$jumlah',
        jumlah_hari='$jumlah_hari',
        jumlah_hari_telat='$jumlah_hari_telat',
        denda='$denda',
        total_bayar='$total_bayar',
        status_bayar='$status_bayar',
        status_sewa='$status_sewa'
        WHERE id_pemesanan='$id_pemesanan'");
		return $haschecked;
	}

    function gawai(){
        $qu = $this->db->query("SELECT * FROM pegawai ORDER BY rand() LIMIT 1");
        return $qu;
    }

    function data_sewaa(){
        $aa = $this->db->query("SELECT * FROM penyewaan");
        return $aa;
    }

    function check($kode_penyewaan,$id_alat_musik,$tgl_pemesanan,$tgl_jatuh_tempo,$id_pelanggan,$id_paket,$id_pegawai,$jumlah,$jumlah_hari,$jumlah_hari_telat,$denda,$total_bayar,$status_bayar,$status_sewa){
		$hascheck = $this->db->query("INSERT INTO penyewaan (kode_penyewaan,id_alat_musik,tgl_pemesanan,tgl_jatuh_tempo,id_pelanggan,id_paket,id_pegawai,jumlah,jumlah_hari,jumlah_hari_telat,denda,total_bayar,status_bayar,status_sewa) VALUES ('$kode_penyewaan','$id_alat_musik','$tgl_pemesanan','$tgl_jatuh_tempo','$id_pelanggan','$id_paket','$id_pegawai','$jumlah','$jumlah_hari','$jumlah_hari_telat','$denda','$total_bayar','$status_bayar','$status_sewa')");
		return $hascheck;
	}

    function data_sewa_satuan(){
        $pe = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM penyewaan
        JOIN alat_musik ON alat_musik.id_alat_musik=penyewaan.id_alat_musik
        WHERE id_pelanggan='$pe' AND status_sewa NOT IN ('Akan Sewa')");
        return $query;
    }

    function data_sewa_paket(){
        $pe = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM penyewaan
        JOIN daftar_paket ON daftar_paket.id_paket=penyewaan.id_paket
        WHERE id_pelanggan='$pe' AND status_sewa NOT IN ('Akan Sewa')");
        return $query;
    }



}
?>