<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_front extends CI_Model{
    function data_almus(){
        $query=$this->db->query("SELECT * FROM alat_musik ORDER BY id_alat_musik DESC");
        return $query;
    }

    function data_login($username,$password){
        $query=$this->db->query("SELECT * FROM pelanggan WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }

    function prose(){
        $wa = $this->db->query("SELECT * FROM penyewaan
        JOIN alat_musik ON alat_musik.id_alat_musik=penyewaan.id_alat_musik
        WHERE status_sewa='Proses'");
    }

    function data_almus_limit(){
        $query=$this->db->query("SELECT * FROM alat_musik ORDER BY id_alat_musik DESC LIMIT 3");
        return $query;
    }

    function data_almus_limited(){
        $query=$this->db->query("SELECT * FROM alat_musik ORDER BY id_alat_musik DESC LIMIT 6");
        return $query;
    }

    function daft($username,$password,$nama_pelanggan,$alamat,$no_hp,$kartu_identitas,$no_identitas){
		$hasl = $this->db->query("INSERT INTO pelanggan (username,password,nama_pelanggan,alamat,no_hp,kartu_identitas,no_identitas) VALUES ('$username','$password','$nama_pelanggan','$alamat','$no_hp','$kartu_identitas','$no_identitas')");
		return $hasl;
	}

    function check($kode_penyewaan,$id_alat_musik,$tgl_pemesanan,$tgl_jatuh_tempo,$id_pelanggan,$id_paket,$id_pegawai,$jumlah,$jumlah_hari,$jumlah_hari_telat,$denda,$total_bayar,$status_bayar,$status_sewa){
		$hascheck = $this->db->query("INSERT INTO penyewaan (kode_penyewaan,id_alat_musik,tgl_pemesanan,tgl_jatuh_tempo,id_pelanggan,id_paket,id_pegawai,jumlah,jumlah_hari,jumlah_hari_telat,denda,total_bayar,status_bayar,status_sewa) VALUES ('$kode_penyewaan','$id_alat_musik','$tgl_pemesanan','$tgl_jatuh_tempo','$id_pelanggan','$id_paket','$id_pegawai','$jumlah','$jumlah_hari','$jumlah_hari_telat','$denda','$total_bayar','$status_bayar','$status_sewa')");
		return $hascheck;
	}
	
	function data_almus_elektrik(){
        $query=$this->db->query("SELECT * FROM alat_musik WHERE jenis='Elektrik'");
        return $query;
    }

    function data_almus_akustik(){
        $query=$this->db->query("SELECT * FROM alat_musik WHERE jenis='Akustik'");
        return $query;
    }
	
	function data_almus_paket(){
        $query=$this->db->query("SELECT * FROM daftar_paket LIMIT 6");
        return $query;
    }

    function data_checkout(){
        $pelanggan = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM penyewaan
        JOIN alat_musik ON alat_musik.id_alat_musik=penyewaan.id_alat_musik
        WHERE id_pelanggan='$pelanggan' AND status_sewa='Akan Sewa'");
        return $query;
    }

    function data_sewa(){
        $pe = $this->session->userdata('ses_id');
        $query=$this->db->query("SELECT * FROM penyewaan
        JOIN alat_musik ON alat_musik.id_alat_musik=penyewaan.id_alat_musik
        WHERE id_pelanggan='$pe' AND status_sewa='Diproses'");
        return $query;
    }
	
    function day_change($id_pemesanan,$jumlah_hari,$total_bayar){
		$haschecke = $this->db->query("UPDATE penyewaan SET 
        jumlah_hari='$jumlah_hari',
        total_bayar='$total_bayar'
        WHERE id_pemesanan='$id_pemesanan'");
		return $haschecke;
	}

    function proselesai($id_pemesanan,$kode_penyewaan,$id_alat_musik,$tgl_pemesanan,$id_pelanggan,$id_paket,$id_pegawai,$jumlah,$jumlah_hari,$total_bayar,$status_bayar){
		$haschecked = $this->db->query("UPDATE penyewaan SET
        kode_penyewaan='$kode_penyewaan',
        id_alat_musik='$id_alat_musik',
        tgl_pemesanan='$tgl_pemesanan',
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

    function getting($id_alat_musik){
        $ab = $this->db->query("SELECT * FROM alat_musik WHERE id_alat_musik='$id_alat_musik'");
        return $ab;
    }

    function getting_packet($id_paket){
        $ab = $this->db->query("SELECT * FROM daftar_paket WHERE id_paket='$id_paket'");
        return $ab;
    }

}
?>
