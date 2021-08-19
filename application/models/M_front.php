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