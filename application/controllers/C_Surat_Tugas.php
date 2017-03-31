<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Surat_Tugas extends CI_Controller {

	function __construct()
	{
	parent::__construct(); 

	$this->load->model('M_Surat_Tugas');
	$this->load->model('M_Catatan');
	}

	public function index()
	{
		$data['success']=1;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=2;
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$jam=$this->M_Surat_Tugas->lihat_jam_keberangkatan();
		$data['jam']=$jam->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanSuratTugas',$data);
		$this->load->view('V_Footer');
	}
	public function masukkanSuratTugas(){
		$nama_ketua=$this->input->post('Nama_ketua');
		$nip_ketua=$this->input->post('NIP_ketua');
		$jabatan_ketua=$this->input->post('Jabatan');
		$mulai = $this->input->post('datefilter');
		$akhir = $this->input->post('datefilter2');
		$tujuan=$this->input->post('Tujuan');
		$Kegiatan=$this->input->post('Kegiatan');
		$nama_signer=$this->input->post('Nama_signer');
		$jabatan_signer=$this->input->post('Jabatan_signer');
		$need_driver=$this->input->post('need_driver');
		
		$mulai = date('Y-m-d', strtotime($mulai));
		$akhir = date('Y-m-d', strtotime($akhir));
        $tgl = date("Y-m-d");
        if($need_driver!=1){
        	$need_driver=0;
        }else{
        	$jam=$this->input->post('jam');
			$jumlah=$this->input->post('jumlah_pengemudi');
			if($jam==""  || $jumlah==""){
				$jam=1;
				$jumlah=1;
			}
        	$array = array('nama_pengguna' => $nama_ketua,'tujuan'=>$tujuan, 'tanggal_mulai'=>$mulai, 'tanggal_selesai'=>$akhir, 
        		'kegiatan'=>$Kegiatan, 'jam_keberangkatan'=>$jam, 'jumlah_pengemudi'=>$jumlah, 'id_status'=>'1');
        	$need_driver=$this->M_Surat_Tugas->masukkan_permohonan($array);
        }
		
			$nomer=$this->M_Surat_Tugas->cek_nomer_terakhir();
			$no='';
			foreach($nomer->result() as $row){
				$no=$row->nomor_surattugas;
				break;
			}
			
			if(count($nomer)==0){
				$nomer1=1;
			}else{
				$no=explode("/",$no);
            $arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$no[1]); 
           $nomer1=$arr[0];
           $nomer1++;

			}
			 $today=19+date('Y')-2017;
            

			$noSurat=$today."/".$nomer1."/Sb/ST";
			$array = array('nomor_surattugas' => $noSurat,'nama'=>$nama_ketua, 'nip'=>$nip_ketua, 'jabatan'=>$jabatan_ketua,  
			'tanggal_surat' => $tgl,'tanggaldinas_mulai'=>$mulai, 'tanggaldinas_berakhir'=>$akhir, 'tujuan'=>$tujuan, 
			'kegiatan'=>$Kegiatan, 'need_driver'=>$need_driver, 'nama_signer'=>$nama_signer,'jabatan_signer'=>$jabatan_signer);
		$hasil = $this->M_Surat_Tugas->masukkan_data($array);
		$cek_driver = $this->M_Surat_Tugas->cek_surat($noSurat);
		$id_tugas='';
		$cek_driver=$cek_driver->row_array();
		$id_tugas=$cek_driver['id_surattugas'];
		for($i=0;$i<10;$i++){
		
		$nama=$this->input->post('Nama'.$i);
		$nip=$this->input->post('NIP'.$i);
		$jabatan=$this->input->post('Jabatan'.$i);
		if($nama!="" && $nip!="" && $jabatan!=""){
		
		$array = array('id_surattugas' => $id_tugas,'nama_pengikut'=>$nama, 'nip_pengikut'=>$nip, 'jabatan_pengikut'=>$jabatan);
		$cek_driver = $this->M_Surat_Tugas->masukkan_pengikut($array);
		}
		}
		$hasil=1;
		if($hasil==1){
			$noSurat=explode('/',$noSurat);
			$surat=implode('-',$noSurat);
         header('Location: '.base_url().'index.php/C_Surat_Tugas/TampilkanNomerRubrik_suratTugas1/'.$surat);
		
		}
		else{
		$data['success']=0;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik';
		$data['top']=2;
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanSuratTugas',$data);
		$this->load->view('V_Footer');

		
		}
	}
	public function TampilkanNomerRubrik_suratTugas1($noSurat){ //menampilkan tabel dengan case input terlebih dahulu
        $noSurat=explode('-',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Berhasil Dimasukkan, No Rubrik Anda :'.$surat;
		$hasil = $this->M_Surat_Tugas->lihat_rubrik();
		$data['surat']=$hasil->result();
		
		$pengikut=array();
		$i=0;
		foreach ($hasil->result() as $k){
			$hasil2 = $this->M_Surat_Tugas->lihat_pengikut($k->id_surattugas);
			if(count($hasil2)>0)
			$pengikut[$i]=$hasil2->result();
		else
			$pengikut[$i]="";
			$i++;
		}
		$data['pengikut']=$pengikut;
		$data['active']='surat_tugas';
		$data['active2']='';
		$data['active3']='';
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_SuratTugas',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_suratTugas2(){ //menampilkan tabel dengan case TANPA input terlebih dahulu
		$data['Nosurat']='';
		$hasil = $this->M_Surat_Tugas->lihat_rubrik();
		$data['surat']=$hasil->result();
		
		$pengikut=array();
		$i=0;
		foreach ($hasil->result() as $k){
			$hasil2 = $this->M_Surat_Tugas->lihat_pengikut($k->id_surattugas);
			if(count($hasil2)>0)
			$pengikut[$i]=$hasil2->result();
		else
			$pengikut[$i]="";
			$i++;
		}
		$data['pengikut']=$pengikut;
		$data['active']='surat_tugas';
		$data['active2']='';
		$data['active3']='';
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_SuratTugas',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_suratTugas3($noSurat){ //menampilkan tabel dengan case megedit surat yang ada sebelumnya
        $noSurat=explode('-',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Berhasil Diperbarui, No Rubrik Anda :'.$surat;
		$hasil = $this->M_Surat_Tugas->lihat_rubrik();
		$data['surat']=$hasil->result();
		
		$pengikut=array();
		$i=0;
		foreach ($hasil->result() as $k){
			$hasil2 = $this->M_Surat_Tugas->lihat_pengikut($k->id_surattugas);
			if(count($hasil2)>0)
			$pengikut[$i]=$hasil2->result();
		else
			$pengikut[$i]="";
			$i++;
		}
		$data['pengikut']=$pengikut;
		$data['active']='surat_tugas';
		$data['active2']='';
		$data['active3']='';
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_SuratTugas',$data);
		$this->load->view('V_Footer');
	}
	public function TampilkanNomerRubrik_suratTugas4($noSurat){ //menampilkan tabel dengan case megedit surat yang ada sebelumnya (edit gagal/tanpa edit)
        $noSurat=explode('-',$noSurat);
		$surat=implode('/',$noSurat);
		$data['Nosurat']='No Rubrik Anda Tidak Diperbarui, No Rubrik Anda :'.$surat;
		$hasil = $this->M_Surat_Tugas->lihat_rubrik();
		$data['surat']=$hasil->result();
		
		$pengikut=array();
		$i=0;
		foreach ($hasil->result() as $k){
			$hasil2 = $this->M_Surat_Tugas->lihat_pengikut($k->id_surattugas);
			if(count($hasil2)>0)
			$pengikut[$i]=$hasil2->result();
		else
			$pengikut[$i]="";
			$i++;
		}
		$data['pengikut']=$pengikut;
		$data['active']='surat_tugas';
		$data['active2']='';
		$data['active3']='';
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_TabelNoRubrik_SuratTugas',$data);
		$this->load->view('V_Footer');
	}
	public function TampilEditNoSuratTugas($noSurat){
     	$data['success']=1;
		$Surat=explode('-',$noSurat);
		$data['jenis']='';
		$NewSurat=implode('/',$Surat);
		$hasil = $this->M_Surat_Tugas->cek_surat_Tugas($NewSurat);
		$data['nama_ketua']='';
		$data['nip_ketua']='';
		$data['jabatan_ketua']='';
		$data['tujuan']='';
		$data['kegiatan']='';
		$data['mulai']='';
		$data['akhir']='';
		$data['pengikut']='';
		$data['nama_signer']='';
		$data['jabatan_signer']='';
		$data['need_driver']='';
		$data['id']='';
		$driver='';
		$data['id_permohonan']='';
		$id_status=0;
		$id_permohonan='';
		$id_jam='';
		$jml_driver='';
		$hasil2=array();
	    foreach ($hasil->result() as $k){
	    $data['id']=$k->id_surattugas;
	    $data['nama_ketua']=$k->nama;
		$data['nip_ketua']=$k->nip;
		$data['jabatan_ketua']=$k->jabatan;
		$data['tujuan']=$k->tujuan;
		$data['kegiatan']=$k->kegiatan;
		$mulai = date("d-m-Y", strtotime($k->tanggaldinas_mulai));
		$akhir = date("d-m-Y", strtotime($k->tanggaldinas_berakhir));
		$data['mulai']=$mulai;
		$data['akhir']=$akhir;
		$data['nama_signer']=$k->nama_signer;
		$data['jabatan_signer']=$k->jabatan_signer;
		$data['id_permohonan']=$k->need_driver;
		$driver=$k->need_driver;
		$id_permohonan=$k->need_driver;

		if($driver>0){
			$driver = $this->M_Surat_Tugas->lihat_permohonan_pengemudi($driver);
			foreach ($driver->result() as $key){
				$driver=$key->status;
				$id_status=$key->id_status;
				$id_jam=$key->jam_keberangkatan;
				$jml_driver=$key->jumlah_pengemudi;
			}
		}
		
		$hasil2 = $this->M_Surat_Tugas->lihat_pengikut($k->id_surattugas);
	    }
	    $pengikut=array();
		$i=0;
		if(count($hasil2)>0){
		foreach ($hasil2->result() as $k){
			$pengikut[$i][0]=$k->id_pengikut;
			$pengikut[$i][1]=$k->nama_pengikut;
			$pengikut[$i][2]=$k->nip_pengikut;
			$pengikut[$i][3]=$k->jabatan_pengikut;
			$i++;
		
		}
		}
		$data['id_status']=$id_status;
		$data['need_driver']=$driver; //status permohonan
		$data['id_jam']=$id_jam; //jam keberangkatan
		$data['jumlah_driver']=$jml_driver; //jumlah driver
	    $data['pengikut']=$pengikut;
		$data['noSurat']=$NewSurat;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Edit Nomor Rubrik';
		$data['top']=2;
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$jam=$this->M_Surat_Tugas->lihat_jam_keberangkatan();
		$data['jam']=$jam->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_EditNomorRubrik_SuratTugas',$data); //jika status belum diproses
		$this->load->view('V_Footer');

	}
	public function EditNoSurat(){ //mengedit surat tugas tanpa driver dan dengan driver yang belum terproses
		$id=$this->input->post('id');
		$nomor=$this->input->post('nomor');
		$nama_ketua=$this->input->post('Nama_ketua');
		$nip_ketua=$this->input->post('NIP_ketua');
		$jabatan_ketua=$this->input->post('Jabatan');
		$tujuan=$this->input->post('Tujuan');
		$Kegiatan=$this->input->post('Kegiatan');
		$nama_signer=$this->input->post('Nama_signer');
		$jabatan_signer=$this->input->post('Jabatan_signer');
		$need_driver=$this->input->post('need_driver');
		$mulai = $this->input->post('datefilter');
		$akhir = $this->input->post('datefilter2');
		
		
		$mulai = date("Y-m-d", strtotime($mulai));
		$akhir = date("Y-m-d", strtotime($akhir));
        $tujuan;
        if($need_driver!=1){
        	$need_driver=0;
        }else{
        	$id_permohonan=$this->input->post('id_permohonan');
        	$jam=$this->input->post('jam');
			$jumlah=$this->input->post('jumlah_pengemudi');
			if($jam==""  || $jumlah==""){
				$jam=1;
				$jumlah=1;
			}
        	if($id_permohonan=='0'){ //input permohonan driver
        	$array = array('nama_pengguna' => $nama_ketua,'tujuan'=>$tujuan, 'tanggal_mulai'=>$mulai, 'tanggal_selesai'=>$akhir, 
        		'kegiatan'=>$Kegiatan, 'jam_keberangkatan'=>$jam, 'jumlah_pengemudi'=>$jumlah, 'id_status'=>'1');
        	$need_driver=$this->M_Surat_Tugas->masukkan_permohonan($array);
        	}else{ //update permohonan driver
        	$array = array('nama_pengguna' => $nama_ketua,'tujuan'=>$tujuan, 'tanggal_mulai'=>$mulai, 'tanggal_selesai'=>$akhir, 
        		'kegiatan'=>$Kegiatan, 'jam_keberangkatan'=>$jam, 'jumlah_pengemudi'=>$jumlah);
        	$need_driver=$this->M_Surat_Tugas->update_Permohonan($id_permohonan,$array);
        	$need_driver=$id_permohonan;

        	}
        }
		
		$array = array('nama'=>$nama_ketua, 'nip'=>$nip_ketua, 'jabatan'=>$jabatan_ketua,
			'tanggaldinas_mulai'=>$mulai, 'tanggaldinas_berakhir'=>$akhir, 'tujuan'=>$tujuan, 
			'kegiatan'=>$Kegiatan, 'need_driver'=>$need_driver, 'nama_signer'=>$nama_signer,'jabatan_signer'=>$jabatan_signer);
		$hasil = $this->M_Surat_Tugas->update_suratTugas($id, $array);

		for($i=0;$i<10;$i++){
		
		$nama=$this->input->post('Nama'.$i);
		$nip=$this->input->post('NIP'.$i);
		$jabatan=$this->input->post('Jabatan'.$i);
		$id_pengikut=$this->input->post('id_pengikut'.$i);
		if($nama!="" && $nip!="" && $jabatan!=""){
			if($id_pengikut==""){
			$array = array('id_surattugas' => $id,'nama_pengikut'=>$nama, 'nip_pengikut'=>$nip, 'jabatan_pengikut'=>$jabatan);
			$cek_driver = $this->M_Surat_Tugas->masukkan_pengikut($array);	
			}else{
			$array = array('nama_pengikut'=>$nama, 'nip_pengikut'=>$nip, 'jabatan_pengikut'=>$jabatan);
			$cek_driver = $this->M_Surat_Tugas->update_pengikut($id, $id_pengikut, $array);
			}
		
		}
		if($nama=="" || $nip=="" || $jabatan=="" && $id_pengikut!=""){
			$cek_driver = $this->M_Surat_Tugas->delete_pengikut($id, $id_pengikut);
		}
		}
		if($hasil==1){
			$noSurat=explode('/',$nomor);
			$surat=implode('-',$noSurat);
     header('Location: '.base_url().'index.php/C_Surat_Tugas/TampilkanNomerRubrik_suratTugas3/'.$surat);
		
		}
		else{
		$noSurat=explode('/',$nomor);
			$surat=implode('-',$noSurat);
     header('Location: '.base_url().'index.php/C_Surat_Tugas/TampilkanNomerRubrik_suratTugas4/'.$surat);

		
		}
	}
	public function hapus_permohonan ($id_permohonan, $nomor, $id_surattugas){
		
		$tgl = date("Y-m-d");
		$array = array( 'is_delete'=>$tgl);
		$hasil = $this->M_Surat_Tugas->delete_permohonan($id_permohonan,$array);
		$array = array( 'need_driver'=>'0');
		$hasil = $this->M_Surat_Tugas->update_suratTugas($id_surattugas, $array);
			$noSurat=explode('/',$nomor);
			$surat=implode('-',$noSurat);
      header('Location: '.base_url().'index.php/C_Surat_Tugas/TampilEditNoSuratTugas/'.$nomor);
		
		
	}
	public function TampilMasukanBackdate(){
		$data['success']=1;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=2;
		$jam=$this->M_Surat_Tugas->lihat_jam_keberangkatan();
		$data['jam']=$jam->result();
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateSuratTugas',$data);
		$this->load->view('V_Footer');
	}
	public function MasukanBackdate_SuratTugas(){
		$nama_ketua=$this->input->post('Nama_ketua');
		$nip_ketua=$this->input->post('NIP_ketua');
		$jabatan_ketua=$this->input->post('Jabatan');
		$tujuan=$this->input->post('Tujuan');
		$Kegiatan=$this->input->post('Kegiatan');
		$nama_signer=$this->input->post('Nama_signer');
		$jabatan_signer=$this->input->post('Jabatan_signer');
		$tanggal=$this->input->post('tanggal_backdate');
		$mulai = $this->input->post('datefilter');
		$akhir = $this->input->post('datefilter2');
		
		$mulai = date("Y-m-d", strtotime($mulai));
		$akhir = date("Y-m-d", strtotime($akhir));
        $tgl = date("Y-m-d", strtotime($tanggal));
		$nomer=$this->M_Surat_Tugas->cek_backdate($tgl);


		if(count($nomer->result())>0){
		
		
			
			$no='';
			foreach($nomer->result() as $row){
				$no=$row->nomor_surattugas;
				break;
			}
			
			$no=explode("/",$no);
            $arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$no[1]); 
           $nomer1='A';
            if(count($arr)>1){
                $nomer1=$arr[1];
                $nomer1++;
            }
			$noSurat=$no[0]."/".$arr[0].$nomer1."/Sb/ST";
			$array = array('nomor_surattugas' => $noSurat,'nama'=>$nama_ketua, 'nip'=>$nip_ketua, 'jabatan'=>$jabatan_ketua,  
			'tanggal_surat' => $tgl,'tanggaldinas_mulai'=>$mulai, 'tanggaldinas_berakhir'=>$akhir, 'tujuan'=>$tujuan, 
			'kegiatan'=>$Kegiatan, 'need_driver'=>'0', 'nama_signer'=>$nama_signer,'jabatan_signer'=>$jabatan_signer);
		$hasil = $this->M_Surat_Tugas->masukkan_data($array);
		$cek_driver = $this->M_Surat_Tugas->cek_surat($noSurat);
		$id_tugas='';
		$cek_driver=$cek_driver->row_array();
		$id_tugas=$cek_driver['id_surattugas'];
		for($i=0;$i<10;$i++){
		
		$nama=$this->input->post('Nama'.$i);
		$nip=$this->input->post('NIP'.$i);
		$jabatan=$this->input->post('Jabatan'.$i);
		if($nama!="" && $nip!="" && $jabatan!=""){
		
		$array = array('id_surattugas' => $id_tugas,'nama_pengikut'=>$nama, 'nip_pengikut'=>$nip, 'jabatan_pengikut'=>$jabatan);
		$cek_driver = $this->M_Surat_Tugas->masukkan_pengikut($array);
		}
		}
		if($hasil==1){
			$noSurat=explode('/',$noSurat);
			$surat=implode('-',$noSurat);
        header('Location: '.base_url().'index.php/C_Surat_Tugas/TampilkanNomerRubrik_suratTugas1/'.$surat);
		
		}
		else{
		$data['success']=0;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=2;
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateSuratTugas',$data);
		$this->load->view('V_Footer');

		
		}
	}else{
		$data['success']=2;
		$data['active']='rubrik';
		$data['active2']='';
		$data['active3']='';
		$data['judul']='Masukan Nomor Rubrik (Backdate)';
		$data['top']=2;
		$fungsi=$this->M_Catatan->lihat_fungsi();
		$data['fungsi']=$fungsi->result();
		$this->load->view('V_Head');
		$this->load->view('V_Asidebar',$data);
		$this->load->view('V_Top_Anchor',$data);
		$this->load->view('V_MasukanBackdateSuratTugas',$data);
		$this->load->view('V_Footer');
	}
	}
	
	

}
