<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Surat extends CI_Controller {

	function __construct()
	{
	parent::__construct(); 

	$this->load->model('M_Surat');
	}

	public function index()
	{
		$data['success']=1;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=1;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanNomorRubrik_Surat',$data);
		$this->load->view('V_Footer');


	}
	public function MasukanNoRubrik(){
		$kepada=$this->input->post('kepada');
		$perihal=$this->input->post('perihal');
        $tgl = date("Y-m-d");
		$jenis=$this->input->post('jenis_surat');

		
			$nomer=$this->M_Surat->cek_nomer_terakhir();
			$no='';
			foreach($nomer->result() as $row){
				$no=$row->nomor_surat;
				break;
			}
			$jenis_surat='B';
        	if($jenis==2){
        		$jenis_surat='Rhs';
        	}
			$no=explode("/",$no);
            $today=19+date('Y')-2017;
            $arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$no[1]); 
           
			$nomer1=$arr[0];
            $nomer1++;


			$noSurat=$today."/".$nomer1."/Sb/Srt/".$jenis_surat;
		$array = array('nomor_surat' => $noSurat,'kepada'=>$kepada, 'perihal'=>$perihal, 'tanggal'=>$tgl );
		$hasil = $this->M_Surat->masukkan_data($array);
		
		if($hasil==1){
			$noSurat=explode('/',$noSurat);
			$surat=implode('-',$noSurat);
         header('Location: '.base_url().'index.php/C_Surat/TampilkanNomerRubrik_surat1/'.$surat);
		}
		else{
		$data['success']=0;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=1;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanNomorRubrik_Surat',$data);
		$this->load->view('V_Footer');

		
		}

	}
	public function TampilkanNomerRubrik_surat1($noSurat){ //menampilkan tabel dengan case input terlebih dahulu
        $noSurat=explode('-',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Berhasil Dimasukkan, No Rubrik Anda :'.$surat;
		$hasil = $this->M_Surat->lihat_rubrik();
		$data['surat']=$hasil->result();
		$data['active']='surat';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_Surat',$data);
		$this->load->view('V_Footer');
	}
    public function TampilkanNomerRubrik_surat2(){ //menampilkan tabel dengan case TANPA input terlebih dahulu
		$data['Nosurat']='';
		$hasil = $this->M_Surat->lihat_rubrik();
		$data['surat']=$hasil->result();
		$data['active']='surat';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_Surat',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_surat3($noSurat){ //menampilkan tabel dengan case megedit surat yang ada sebelumnya
        $noSurat=explode('-',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Berhasil Diperbarui, No Rubrik Anda :'.$surat;
		$hasil = $this->M_Surat->lihat_rubrik();
		$data['surat']=$hasil->result();
		$data['active']='surat';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_Surat',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_surat4($noSurat){ //menampilkan tabel dengan case megedit surat yang ada sebelumnya tidak diupdate
        $noSurat=explode('-',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Tidak Diperbarui, No Rubrik Anda :'.$surat;
		$hasil = $this->M_Surat->lihat_rubrik();
		$data['surat']=$hasil->result();
		$data['active']='surat';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_Surat',$data);
		$this->load->view('V_Footer');
	}
	public function TampilEditNoSurat($noSurat){
     $data['success']=1;
		$data['active']='rubrik';
		$Surat=explode('-',$noSurat);
		$data['jenis']='';
		if($Surat[4]=='B'){
			$data['jenis']='1';
		}
		else
			$data['jenis']='2';
		$NewSurat=implode('/',$Surat);
		$hasil = $this->M_Surat->cek_surat($NewSurat);
		$data['kepada']='';
		$data['perihal']='';
		$data['tanggal']='';
		$data['id']='';
		foreach($hasil->result() as $r){
			$data['kepada']=$r->kepada;
			$data['perihal']=$r->perihal;
			$data['id']=$r->id_surat;
			$data['tanggal']=date("d/m/Y", strtotime($r->tanggal));
		}
		$data['noSurat']=$NewSurat;
		$data['active']='rubrik';
		$data['judul']='Edit Nomor Rubrik';
		$data['top']=1;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_EditNomorRubrik_Surat',$data);
		$this->load->view('V_Footer');

	

	}
	public function EditNoSurat(){
		$id=$this->input->post('id');
		$perihal=$this->input->post('perihal');
		$kepada=$this->input->post('kepada');
		$jenis=$this->input->post('jenis_surat');
		$nomor=$this->input->post('nomor');
		$Surat=explode('/',$nomor);
		if($jenis==1){
			$jenis='B';
		}
		else{
			$jenis='Rhs';
		}
		$Surat[4]=$jenis;
		$NewSurat=implode('/',$Surat);
		$array = array('nomor_surat' => $NewSurat,'kepada'=>$kepada, 'perihal'=>$perihal );
		$hasil = $this->M_Surat->update_surat($id, $array);
		
		if($hasil==1){
			$noSurat=explode('/',$NewSurat);
			$surat=implode('-',$noSurat);
			echo $surat;
         header('Location: '.base_url().'index.php/C_Surat/TampilkanNomerRubrik_surat3/'.$surat);
		}
		else{
		    $noSurat=explode('/',$NewSurat);
			$surat=implode('-',$noSurat);
			echo $surat;
         header('Location: '.base_url().'index.php/C_Surat/TampilkanNomerRubrik_surat4/'.$surat);
		
		}
	}
	public function TampilMasukanBackdate(){
		$data['success']=1;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=1;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateSurat',$data);
		$this->load->view('V_Footer');
	}
	public function MasukanBackdate_Surat(){
        $kepada=$this->input->post('kepada');
		$perihal=$this->input->post('perihal');
		$tanggal=$this->input->post('tanggal_1');
        $tgl= date("Y-m-d", strtotime($tanggal));
		$jenis=$this->input->post('jenis_surat');

			$nomer=$this->M_Surat->cek_backdate($tgl);

		if(count($nomer->result())>0){
			$no='';
			foreach($nomer->result() as $row){
				$no=$row->nomor_surat;
				break;
			}
			$jenis_surat='B';
        	if($jenis==2){
        		$jenis_surat='Rhs';
        	}
        	echo $no;
			$nomor=explode("/",$no);
			
			$arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$nomor[1]); 
            $nomer1='A';
            if(count($arr)>1){
                $nomer1=$arr[1];
                $nomer1++;
            }
		$noSurat=$nomor[0]."/".$arr[0].$nomer1."/Sb/Srt/".$jenis_surat;
		$array = array('nomor_surat' => $noSurat,'kepada'=>$kepada, 'perihal'=>$perihal, 'tanggal'=>$tgl );
		$hasil = $this->M_Surat->masukkan_data($array);
	
		if($hasil==1){
			$noSurat=explode('/',$noSurat);
			$surat=implode('-',$noSurat);
         header('Location: '.base_url().'index.php/C_Surat/TampilkanNomerRubrik_surat1/'.$surat);
		}
		else{
		$data['success']=0;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=1;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateSurat',$data);
		$this->load->view('V_Footer');
		
		}
	}else{
		$data['success']=2;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=1;
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateSurat',$data);
		$this->load->view('V_Footer');
	}
	}
	


}
