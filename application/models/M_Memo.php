<?php

class M_Memo extends CI_Model {
	
	function __construct()
	{
	parent::__construct();
	}

public function lihat_rubrik(){
	$this->db->select('surat.nomor_surat, surat.kepada, surat.perihal, surat.tanggal');
	$this->db->from('surat');
	$this->db->order_by("nomor_surat","desc");
	$this->db->limit(100, 0);
	return $this->db->get();
}

public function lihat_divisi(){
	$this->db->select('*');
	$this->db->from('divisi');
	return $this->db->get();
}
}
?>