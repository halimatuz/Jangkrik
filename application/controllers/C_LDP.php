<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_LDP extends CI_Controller {

	function __construct()
	{
	parent::__construct(); 

	$this->load->model('M_LDP');
	$this->load->model('M_Catatan');
	}

	public function index()
	{
		$data['success']=1;
		$data['active']='rubrik';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=4;
		$data['active2']='';
		$data['active3']='';
		$divisi=$this->M_LDP->lihat_divisi();
		$data['divisi']=$divisi->result();
		$fungsi=$this->M_LDP->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanNomorLDP',$data);
		$this->load->view('V_Footer');
	}
	public function MasukanNoRubrik(){
		$dari_fungsi=$this->input->post('dari_fungsi');
		$dari_divisi=$this->input->post('dari_divisi');
		$kpd_fungsi=$this->input->post('kpd_fungsi');
		$perihal=$this->input->post('perihal');
        $tgl = date("Y-m-d");
		$jenis=$this->input->post('jenis_surat');
		$nomer=1;
		$nomer1=1;
		$no='';
		$f=$dari_fungsi;
			if($dari_divisi=="DPE"){
				$nomer=$this->M_LDP->cek_nomer_terakhir($dari_divisi);
				$f=$dari_divisi;
			
			foreach($nomer->result() as $row){
				$no=$row->nomor_ldp;
				break;
			}
			}else{
				$nomer=$this->M_LDP->cek_nomer_terakhir($dari_fungsi);
		
			foreach($nomer->result() as $row){
				$no=$row->nomor_ldp;
				break;
			}
			}
			
			$noSurat='';
			$jenis_surat='B';
        	if($jenis==2){
        		$jenis_surat='Rhs';
        	}
			$no=explode("/",$no);
            $today=19+date('Y')-2017;
            
            if(count($no)>1){
            $arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$no[1]); 
           
			$nomer1=$arr[0];
            $nomer1++;
        }
            if($dari_divisi=='DPE'){
            	$noSurat=$today."/".$nomer1."/Sb-".$dari_divisi."/M.01/".$jenis_surat;
            }else{
            	if($dari_divisi=='DSPPUR'){
            		$dari_divisi='SPPUR';
            		if($dari_fungsi=='SLA'){
            			$noSurat=$today."/".$nomer1."/Sb-".$dari_fungsi."/M.01/".$jenis_surat;
            		}
            		else
            			$noSurat=$today."/".$nomer1."/Sb-".$dari_divisi."-".$dari_fungsi."/M.01/".$jenis_surat;
            	}
            	else
            	$noSurat=$today."/".$nomer1."/Sb-".$dari_divisi."-".$dari_fungsi."/M.01/".$jenis_surat;
            }
			
		$array = array('nomor_ldp' => $noSurat,'kepada'=>$kpd_fungsi, 'perihal'=>$perihal, 'tgl'=>$tgl, 'backdate'=> $noSurat );
		$hasil = $this->M_LDP->masukkan_data($array);
		
		if($hasil==1){
			$noSurat=explode('/',$noSurat);
			$surat=implode('_',$noSurat);
        header('Location: '.base_url().'index.php/C_LDP/TampilkanNomerRubrik_surat1/'.$surat.'/'.$f);
		}
		else{
		$data['success']=0;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=4;
		$divisi=$this->M_LDP->lihat_divisi();
		$data['divisi']=$divisi->result();
		$fungsi=$this->M_LDP->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanNomorLDP',$data);
		$this->load->view('V_Footer');

		
		}
	} 
public function TampilkanNomerRubrik_surat1($noSurat, $f){ //menampilkan tabel dengan case input terlebih dahulu
        $noSurat=explode('_',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Berhasil Dimasukkan, No Rubrik Anda :'.$surat;
		$hasil = $this->M_LDP->lihat_rubrik($f);
		$data['ldp']=$hasil->result();
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$data['active']='ldp';
		$data['active2']=$f;
		$data['active3']='';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_LDP',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_surat2($f){ //menampilkan tabel dengan case TANPA input terlebih dahulu
		$data['Nosurat']='';
		$hasil = $this->M_LDP->lihat_rubrik($f);
		$data['ldp']=$hasil->result();
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$data['active']='ldp';
		$data['active2']=$f;
		$data['active3']='';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_LDP',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_surat3($noSurat, $f){ //menampilkan tabel dengan case megedit surat yang ada sebelumnya
        $noSurat=explode('_',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Berhasil Diperbarui, No Rubrik Anda :'.$surat;
		$hasil = $this->M_LDP->lihat_rubrik($f);
		$data['ldp']=$hasil->result();
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$data['active']='ldp';
		$data['active2']=$f;
		$data['active3']='';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_LDP',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_surat4($noSurat, $f){ //menampilkan tabel dengan case megedit surat yang ada sebelumnya tidak diupdate
        $noSurat=explode('_',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Tidak Diperbarui, No Rubrik Anda :'.$surat;
		$hasil = $this->M_LDP->lihat_rubrik($f);
		$data['ldp']=$hasil->result();
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$data['active']='ldp';
		$data['active2']=$f;
		$data['active3']='';
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_LDP',$data);
		$this->load->view('V_Footer');
	}
	public function TampilEditNoSurat($noSurat){
     $data['success']=1;
		$data['active']='rubrik';
		$Surat=explode('_',$noSurat);
		$data['jenis']='';
		if($Surat[4]=='B'){
			$data['jenis']='1';
		}
		else
			$data['jenis']='2';
		$data['dari_divisi']='';
		$data['dari_fungsi']='';
		
		$dari_divisi=explode('-',$Surat[2]);
		if($dari_divisi[1]=='DPE'){
            	$data['dari_divisi']=$dari_divisi[1];
            	$data['dari_fungsi']='FKKB';
            }else{
            	if($dari_divisi[1]=='SPPUR'){
            		$data['dari_divisi']='DSPPUR';
            		$data['dari_fungsi']=$dari_divisi[2];
            	}
            	else{
            		if($dari_divisi[1]=='SLA'){
            		$data['dari_divisi']='DSPPUR';
            		$data['dari_fungsi']=$dari_divisi[1];
            		}else{
            		$data['dari_divisi']=$dari_divisi[1];
            		$data['dari_fungsi']=$dari_divisi[2];
            		}
            	}
            }
		$NewSurat=implode('/',$Surat);
		$hasil = $this->M_LDP->cek_ldp($NewSurat);
		$data['kepada_f']='';
		$data['kepada_d']='';
		$data['perihal']='';
		$data['tanggal']='';
		$data['id']='';
		foreach($hasil->result() as $r){
			$data['kepada_f']=$r->kepada;
			$data['kepada_d']=$r->id_divisi;
			$data['perihal']=$r->perihal;
			$data['id']=$r->id_ldp;
			$data['tanggal']=date("d/m/Y", strtotime($r->tgl));
		}
		$data['noSurat']=$NewSurat;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Edit Nomor Rubrik';
		$data['top']=4;
		$divisi=$this->M_LDP->lihat_divisi();
		$data['divisi']=$divisi->result();
		$fungsi=$this->M_LDP->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_EditNomorRubrik_LDP',$data);
		$this->load->view('V_Footer');

	}
	public function EditNoSurat(){
		$id=$this->input->post('id');
		$nomor=$this->input->post('nomor');
		$perihal=$this->input->post('perihal');
		$jenis=$this->input->post('jenis_surat');
		$kpd_fungsi=$this->input->post('kpd_fungsi');
		$noSurat=$nomor;
		$Surat=explode('/',$nomor);
		 if($jenis==1){
			$jenis='B';
		}
		else{
			$jenis='Rhs';
		}
		$jenis_surat=$jenis;
		
       $noSurat=$Surat[0]."/".$Surat[1]."/".$Surat[2]."/M.01/".$jenis_surat;
       $f='';
           $fungsi=explode('-',$Surat[2]);
           if(count($fungsi)==3){
           	$f=$fungsi[2];
           }else
           $f=$fungsi[1];
			
		$array = array('nomor_ldp' => $noSurat,'kepada'=>$kpd_fungsi, 'perihal'=>$perihal, 'backdate'=> $noSurat);
		$hasil = $this->M_LDP->update_ldp($id, $array);
		
		if($hasil==1){
			$noSurat=explode('/',$noSurat);
			$surat=implode('_',$noSurat);
			echo $surat;
         header('Location: '.base_url().'index.php/C_LDP/TampilkanNomerRubrik_surat3/'.$surat.'/'.$f);
		}
		else{
		    $noSurat=explode('/',$noSurat);
			$surat=implode('_',$noSurat);
			echo $surat;
         header('Location: '.base_url().'index.php/C_LDP/TampilkanNomerRubrik_surat4/'.$surat.'/'.$f);
		
		}
	}
	public function TampilMasukanBackdate(){
		$data['success']=1;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=4;
		$divisi=$this->M_LDP->lihat_divisi();
		$data['divisi']=$divisi->result();
		$fungsi=$this->M_LDP->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateNomorLDP',$data);
		$this->load->view('V_Footer');
	}
public function MasukanBackdate_Surat(){
        $dari_fungsi=$this->input->post('dari_fungsi');
		$dari_divisi=$this->input->post('dari_divisi');
		$kpd_fungsi=$this->input->post('kpd_fungsi');
		$perihal=$this->input->post('perihal');
		$tanggal=$this->input->post('tanggal_1');
        $tgl= date("Y-m-d", strtotime($tanggal));
		$jenis=$this->input->post('jenis_surat');
		$noSurat='';
		$f=$dari_fungsi;
		if($dari_divisi=='DPE'){
			$f=$dari_divisi;
			$nomer=$this->M_LDP->cek_backdate($tgl, $dari_divisi);
		}else{
			$nomer=$this->M_LDP->cek_backdate($tgl, $dari_fungsi);
		}
		

		if(count($nomer->result())>0){
			$no='';
			$id_surat='';
			foreach($nomer->result() as $row){
				$no=$row->backdate;
				$id_surat=$row->id_ldp;
				break;
			}
			$jenis_surat='B';
        	if($jenis==2){
        		$jenis_surat='Rhs';
        	}
			$nomor=explode("/",$no);
			
			$arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$nomor[1]); 
            $nomer1='A';
            if(count($arr)>1){
                $nomer1=$arr[1];
                $nomer1++;
            }
            if($dari_divisi=='DPE'){
            	$noSurat=$nomor[0]."/".$arr[0].$nomer1."/Sb-".$dari_divisi."/M.01/".$jenis_surat;
            }else{
            	if($dari_divisi=='DSPPUR'){
            		$dari_divisi='SPPUR';
            		if($dari_fungsi=='SLA'){
            			$noSurat=$nomor[0]."/".$arr[0].$nomer1."/Sb-".$dari_fungsi."/M.01/".$jenis_surat;
            		}
            		else
            			$noSurat=$nomor[0]."/".$arr[0].$nomer1."/Sb-".$dari_divisi."-".$dari_fungsi."/M.01/".$jenis_surat;
            	}
            	else
            	$noSurat=$nomor[0]."/".$arr[0].$nomer1."/Sb-".$dari_divisi."-".$dari_fungsi."/M.01/".$jenis_surat;
            }
		
		$array = array('nomor_ldp' => $noSurat,'kepada'=>$kpd_fungsi, 'perihal'=>$perihal, 'tgl'=>$tgl );
		$hasil = $this->M_LDP->masukkan_data($array);
		$array = array('backdate'=> $noSurat );
		$hasil = $this->M_LDP->update_ldp($id_surat, $array);
		
		if($hasil==1){
			$noSurat=explode('/',$noSurat);
			$surat=implode('_',$noSurat);
         header('Location: '.base_url().'index.php/C_LDP/TampilkanNomerRubrik_surat1/'.$surat.'/'.$f);
		}
		else{
		$data['success']=0;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=4;
		$divisi=$this->M_LDP->lihat_divisi();
		$data['divisi']=$divisi->result();
		$fungsi=$this->M_LDP->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateNomorLDP',$data);
		$this->load->view('V_Footer');
		
		}
	}else{
		$data['success']=2;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=4;
		
		$divisi=$this->M_LDP->lihat_divisi();
		$data['divisi']=$divisi->result();
		$fungsi=$this->M_LDP->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateNomorLDP',$data);
		$this->load->view('V_Footer');
	}
	}


}
