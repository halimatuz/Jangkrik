<?php

class M_LDP extends CI_Model {
	
	function __construct()
	{
	parent::__construct();
	}

public function lihat_rubrik($key){
	$this->db->select('ldp.nomor_ldp,  ldp.perihal, ldp.tgl, fungsi.nama_fungsi');
	$this->db->from('ldp');
	$this->db->join('fungsi', 'ldp.kepada=fungsi.id_fungsi');
	$this->db->like('ldp.nomor_ldp',$key);
	$this->db->order_by("nomor_ldp","desc");
	$this->db->limit(100, 0);
	return $this->db->get();
}
public function lihat_divisi(){
	$this->db->select('*');
	$this->db->from('divisi');
	return $this->db->get();
}
public function lihat_fungsi(){
	$this->db->select('fungsi.id_fungsi, fungsi.nama_fungsi, divisi_fungsi.id_divisi');
	$this->db->from('fungsi');
	$this->db->join('divisi_fungsi', 'divisi_fungsi.id_fungsi=fungsi.id_fungsi');
	return $this->db->get();
}
public function cek_nomer_terakhir($key){
	$this->db->select('ldp.nomor_ldp');
	$this->db->from('ldp');
	$this->db->like('ldp.nomor_ldp',$key);
	$this->db->order_by("nomor_ldp","desc");

	return $this->db->get();
}
public function masukkan_data($array){
	$this->db->insert('ldp',$array);
	return $this->db->affected_rows();
}
public function cek_ldp($noldp){
	$this->db->select('ldp.kepada, ldp.perihal, ldp.tgl, ldp.id_ldp, divisi.id_divisi');
	$this->db->from('ldp');
	$this->db->join('divisi_fungsi', 'divisi_fungsi.id_fungsi=ldp.kepada');
	$this->db->join('divisi', 'divisi.id_divisi=divisi_fungsi.id_divisi');
	$this->db->where('ldp.nomor_ldp',$noldp);
	return $this->db->get();
}
public function update_ldp($id, $data){
		$this->db->where('id_ldp',$id);
		$this->db->update('ldp',$data);
		return $this->db->affected_rows();
}
public function cek_backdate($tanggal, $fungsi){
	$this->db->select('ldp.backdate, id_ldp');
	$this->db->from('ldp');
	$this->db->where('ldp.tgl <=',$tanggal);
	$this->db->where('backdate IS NOT NULL');
	$this->db->like('ldp.nomor_ldp',$fungsi);
	$this->db->order_by("nomor_ldp","desc");
	return $this->db->get();
}
}
?>