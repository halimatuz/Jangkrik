<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_LDP extends CI_Controller {

	function __construct()
	{
	parent::__construct(); 

	$this->load->model('M_Surat_Tugas');
	}

	public function index()
	{
		$data['success']=1;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=4;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanNomorLDP',$data);
		$this->load->view('V_Footer');
	}
	


}
