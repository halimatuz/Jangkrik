<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Memo extends CI_Controller {

	function __construct()
	{
	parent::__construct(); 

	$this->load->model('M_Surat_Tugas');
	}

	public function index()
	{ 
		$divisi=$this->input->post('kepada');
		if ($divisi==""){
		$data['success']=1;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=3;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanMemo',$data);
		$this->load->view('V_Footer');
		}
		
	}
	
	


}
