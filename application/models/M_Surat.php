<?php

class M_Surat extends CI_Model {
	
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

public function masukkan_data($array){
	$this->db->insert('surat',$array);
	return $this->db->affected_rows();
}

public function cek_backdate($tanggal){
	$this->db->select('surat.backdate, surat.id_surat');
	$this->db->from('surat');
	$this->db->where('surat.tanggal <=',$tanggal);
	$this->db->where('backdate IS NOT NULL');
	$this->db->order_by("nomor_surat ","desc");
	return $this->db->get();
}
public function cek_nomer_terakhir(){
	$this->db->select('surat.nomor_surat');
	$this->db->from('surat');
	$this->db->order_by("nomor_surat","desc");
	return $this->db->get();
}
public function cek_surat($noSurat){
	$this->db->select('surat.kepada, surat.perihal, surat.tanggal, surat.id_surat');
	$this->db->from('surat');
	$this->db->where('surat.nomor_surat',$noSurat);
	return $this->db->get();
}
public function update_surat($id, $data){
		$this->db->where('id_surat',$id);
		$this->db->update('surat',$data);
		return $this->db->affected_rows();
}
}
?>