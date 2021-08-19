<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_my extends CI_Model{
    
    function customer(){
        $cu = $this->session->userdata('ses_id');
        $cust = $this->db->query("SELECT * FROM pelanggan WHERE id_pelanggan='$cu'");
        return $cust;
    }

    function edit_acc($id_pelanggan,$username,$pas,$nama_pelanggan,$alamat,$no_hp,$kartu_identitas,$no_identitas){
		$haschecked = $this->db->query("UPDATE pelanggan SET
        username='$username',
        password='$pas',
        nama_pelanggan='$nama_pelanggan',
        alamat='$alamat',
        no_hp='$no_hp',
        kartu_identitas='$kartu_identitas',
        no_identitas='$no_identitas'
        WHERE id_pelanggan='$id_pelanggan'");
		return $haschecked;
	}

    function prose(){
        $wa = $this->db->query("SELECT * FROM penyewaan
        JOIN alat_musik ON alat_musik.id_alat_musik=penyewaan.id_alat_musik
        WHERE status_sewa='Proses'");
    }

    

}
?>