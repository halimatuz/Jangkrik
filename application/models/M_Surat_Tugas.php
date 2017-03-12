<?php

class M_Surat_Tugas extends CI_Model {
	
	function __construct()
	{
	parent::__construct();
	}

public function lihat_rubrik(){
	$this->db->select('*');
	$this->db->from('surattugas');
	$this->db->order_by("nomor_surattugas","desc");
	$this->db->limit(100, 0);
	return $this->db->get();
}
public function masukkan_data($array){
	$this->db->insert('surattugas',$array);
	return $this->db->affected_rows();
}
public function cek_nomer_terakhir(){
	$this->db->select('surattugas.nomor_surattugas');
	$this->db->from('surattugas');
	$this->db->order_by("nomor_surattugas","desc");
	return $this->db->get();
}
public function cek_surat($noSurat){
	$this->db->select('surattugas.id_surattugas');
	$this->db->from('surattugas');
	$this->db->where('surattugas.nomor_surattugas',$noSurat);
	return $this->db->get();
}
public function masukkan_pengikut($array){
	$this->db->insert('pengikut_surattugas',$array);
	return $this->db->affected_rows();
}
public function lihat_pengikut($id_surattugas){
	$this->db->select('*');
	$this->db->from('pengikut_surattugas');
	$this->db->where('id_surattugas',$id_surattugas);
	return $this->db->get();
}
public function lihat_permohonan_pengemudi($id_permohonan){
	$this->db->select('*');
	$this->db->from('permohonan_pengemudi AS a');
	$this->db->join('tabel_status AS b','b.id_status=a.id_status');
	$this->db->where('id_permohonan',$id_permohonan);
	return $this->db->get();
}
public function cek_surat_Tugas($noSurat){
	$this->db->select('*');
	$this->db->from('surattugas');
	$this->db->where('surattugas.nomor_surattugas',$noSurat);
	return $this->db->get();
}

public function masukkan_permohonan($array){
	$this->db->insert('permohonan_pengemudi',$array);
	return $last_id = $this->db->insert_id();
}
public function lihat_jam_keberangkatan(){
	$this->db->select('*');
	$this->db->from('jam');
	return $this->db->get();
}
public function update_suratTugas($id, $data){
		$this->db->where('id_surattugas',$id);
		$this->db->update('surattugas',$data);
		return $this->db->affected_rows();
}
public function update_Permohonan($id, $data){
		$this->db->where('id_permohonan',$id);
		$this->db->update('permohonan_pengemudi',$data);
		return $this->db->affected_rows();
}
public function update_pengikut($id_surattugas, $id_pengikut, $data){
		$this->db->where('id_surattugas',$id_surattugas);
		$this->db->where('id_pengikut',$id_pengikut);
		$this->db->update('pengikut_surattugas',$data);
		return $this->db->affected_rows();
}
public function delete_pengikut($id_surattugas, $id_pengikut){
		$this->db->where('id_surattugas',$id_surattugas);
		$this->db->where('id_pengikut',$id_pengikut);
      $this->db->delete('pengikut_surattugas'); 
}
public function cek_backdate($tanggal){
	$this->db->select('surattugas.nomor_surattugas');
	$this->db->from('surattugas');
	$this->db->where('surattugas.tanggal_surat',$tanggal);
	$this->db->order_by("nomor_surattugas","desc");
	return $this->db->get();
}
public function delete_permohonan($id_permohonan, $data){
		$this->db->where('id_permohonan',$id_permohonan);
		$this->db->update('permohonan_pengemudi',$data);
		return $this->db->affected_rows();
}
}
?>