<?php

class M_Catatan extends CI_Model {
	
	function __construct()
	{
	parent::__construct();
	}

public function lihat_rubrik($key){
	$this->db->select('catatan.nomor_catatan, penandatanganan.penandatangan, catatan.perihal, catatan.tgl, fungsi.nama_fungsi');
	$this->db->from('catatan');
	$this->db->join('fungsi', 'catatan.dari=fungsi.id_fungsi');
	$this->db->join('penandatanganan', 'catatan.penandatangan=penandatanganan.id_penandatangan');
	$this->db->like('nomor_catatan',$key);
	$this->db->order_by("nomor_catatan","desc");
	$this->db->limit(100, 0);
	return $this->db->get();
}
public function cek_fungsi($fungsi){
	$this->db->select('id_fungsi');
	$this->db->from('fungsi');
	$this->db->where('nama_fungsi',$fungsi);
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
public function lihat_penandatangan(){
	$this->db->select('*');
	$this->db->from('penandatanganan');
	return $this->db->get();
}
public function cek_nomer_terakhir($key){
	$this->db->select('nomor_catatan');
	$this->db->from('catatan');
	$this->db->like('nomor_catatan',$key);
	$this->db->order_by("nomor_catatan","desc");
	return $this->db->get();
}
public function masukkan_data($array){
	$this->db->insert('catatan',$array);
	return $this->db->affected_rows();
}
public function cek_catatan($nocatatan){
	$this->db->select('*');
	$this->db->from('catatan');
	$this->db->where('catatan.nomor_catatan',$nocatatan);
	return $this->db->get();
}
public function update_catatan($id, $data){
		$this->db->where('id_catatan',$id);
		$this->db->update('catatan',$data);
		return $this->db->affected_rows();
}
public function cek_backdate($tanggal, $key){
	$this->db->select('nomor_catatan');
	$this->db->from('catatan');
	$this->db->where('tgl',$tanggal);
	$this->db->like('nomor_catatan',$key);
	$this->db->order_by("nomor_catatan","desc");
	return $this->db->get();
}

}
?>