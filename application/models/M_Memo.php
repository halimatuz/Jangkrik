<?php

class M_Memo extends CI_Model {
	
	function __construct()
	{
	parent::__construct();
	}

public function lihat_rubrik(){
	$this->db->select('memo.nomor_memo, memo.kepada, memo.perihal, memo.tgl, bi_wide.nama_bi_wide');
	$this->db->from('memo');
	$this->db->join('bi_wide','memo.kepada=bi_wide.id_bi_wide');
	$this->db->order_by("nomor_memo","desc");
	$this->db->limit(100, 0);
	return $this->db->get();
}

public function lihat_bi_wide(){
	$this->db->select('*');
	$this->db->from('bi_wide');
	return $this->db->get();
}
public function cek_nomer_terakhir(){
	$this->db->select('nomor_memo');
	$this->db->from('memo');
	$this->db->order_by("nomor_memo","desc");
	return $this->db->get();
}
public function masukkan_data($array){
	$this->db->insert('memo',$array);
	return $this->db->affected_rows();
}
public function cek_memo($noMemo){
	$this->db->select('*');
	$this->db->from('memo');
	$this->db->where('memo.nomor_memo',$noMemo);
	return $this->db->get();
}
public function update_memo($id, $data){
		$this->db->where('id_memo',$id);
		$this->db->update('memo',$data);
		return $this->db->affected_rows();
}
public function cek_backdate($tanggal){
	$this->db->select('nomor_memo');
	$this->db->from('memo');
	$this->db->where('tgl',$tanggal);
	$this->db->order_by("nomor_memo","desc");
	return $this->db->get();
}
}
?>