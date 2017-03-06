
      <div class="row">
       <section class="col-lg-12 connectedSortable">
          
          <div class="box box-info">
            
            <div class="box-body">


              <form action="<?php echo base_url()."index.php/C_Surat_Tugas/EditNoSurat_Terproses";?>" method="post" class="form-horizontal">
              
              <div class="row">
              <div class="col-sm-4">
            <div class="form-group">
                    <label class="control-label col-sm-5" for="Nama_ketua" >Nomer Surat Anda :</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="nomor" value="<?php echo $noSurat;?>" disabled>
                    <input type="hidden" class="form-control" name="nomor" value="<?php echo $noSurat;?>" >
                    </div>
                  </div>
                  </div></div>
                  <h4>Penugasan Kepada :</h4>
              <div class="row">
              <div class="col-sm-4">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" required>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="Nama_ketua" >Nama :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="Nama_ketua" placeholder="" value="<?php echo $nama_ketua;?>" required disabled>
                    </div>
                  </div>
                  <h1></h1>
                     <h4>Tanggal Dinas Dilakukan :</h4>
                     <br>
                     <div class="form-group">
                    <label class="control-label col-sm-4" for="b_backdate" >Jenis Surat :</label>
                    <div class="col-sm-8">
                              <select class="form-control" name="jenis_surat" required>
                              <option value="" >Pilih Jenis Surat</option>
                               <option <?php if($jenis==1){echo 'selected';}?> value="1" >Biasa</option>
                              <option <?php if($jenis==2){echo 'selected';}?> value="2">Rahasia</option>
                            </select>
               
                    </div>
                 </div>
               
                </div>

                <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="NIP" >NIP :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="NIP_ketua" value="<?php echo $nip_ketua;?>" required >
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="tanggal_2" >Mulai :</label>
                    <div class="col-sm-9">
                   <input type="text" id="datepicker2" name="mulai" value="<?php echo $mulai;?>" style="width: 100%; height: 16px; font-size: 16px; line-height: 18px; border: 1px solid #dddddd; padding: 17px;" required disabled>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="Tujuan" >Tujuan :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="Tujuan" value="<?php echo $tujuan;?>" placeholder="" required disabled>
                    </div>
                  </div>
                 </div>

                <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="Jabatan" >Jabatan :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="Jabatan" value="<?php echo $jabatan_ketua;?>" placeholder="" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="tanggal_3" >Berakhir :</label>
                    <div class="col-sm-9">
                   <input type="text" id="datepicker3" name="berakhir" value="<?php echo $akhir;?>" style="width: 100%; height: 16px; font-size: 16px; line-height: 18px; border: 1px solid #dddddd; padding: 17px;" required disabled>
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3" for="Kegiatan" >Kegiatan:</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="Kegiatan" value="<?php echo $kegiatan;?>" placeholder="" required disabled>
                    </div>
                  </div>
                </div>
                  </div>

                                <h4>Turut Serta :</h4>
                <div class="row">
                <div class="col-sm-4">
                <?php
                for($i=0;$i<10;$i++){
                  echo'<input type="hidden" class="form-control" name="id_pengikut'.$i.'" ';
                  if(count($pengikut)>$i){
                      echo'value="'.$pengikut[$i][0].'"';
                    }
                  echo'placeholder="" >
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="Nama" >Nama :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="Nama'.$i.'" ';
                    if(count($pengikut)>$i){
                      echo'value="'.$pengikut[$i][1].'"';
                    }
                    echo' placeholder="" >
                    </div>
                  </div>';
                }
                  ?>
                </div>

                <div class="col-sm-4">
                <?php
                for($i=0;$i<10;$i++){
                  echo'<div class="form-group">
                    <label class="control-label col-sm-2" for="NIP" >NIP :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="NIP'.$i.'" ';
                    if(count($pengikut)>$i){
                      echo'value="'.$pengikut[$i][2].'"';
                    }
                    echo'placeholder="" >
                    </div>
                  </div>';
                }
                  ?>
                </div>

                <div class="col-sm-4">
                 <?php
                for($i=0;$i<10;$i++){
                  echo' <div class="form-group">
                    <label class="control-label col-sm-3" for="Jabatan" >Jabatan :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="Jabatan'.$i.'" ';
                    if(count($pengikut)>$i){
                      echo'value="'.$pengikut[$i][3].'"';
                    }
                    echo'placeholder="" >
                    </div>
                  </div>';
                }
                  ?>
                 
                  
                </div>
                </div>

                <h4> Penandatangan :</h4>
                <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="Nama" style="text-align:left">Nama :</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="Nama_signer" value="<?php echo $nama_signer;?>" placeholder="" required >
                    </div>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="Jabatan" >Jabatan :</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="Jabatan_signer" value="<?php echo $jabatan_signer;?>" placeholder="" required>
                    </div>
                  </div>
                </div>
                </div>
                  <?php echo '<h4>Status Permohonan Pengemudi : ';
                    if($need_driver!='0') {echo $need_driver;}
                    echo'</h4>';?>
                <div class="row">
                <input type="hidden" class="form-control" name="id_permohonan" placeholder="" value="<?php echo $id_permohonan;?>" >
                <div class="col-sm-2">
                  <div class="form-group">
                    <label class="control-label col-sm-10" for="Butuh pengemudi ?" >Butuh pengemudi ?</label>
                    <div class="col-sm-2">
                    <div class="checkbox"> <input type="checkbox" <?php if($id_status>0){echo'checked';}?> name="need_driver"  value="1" > </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="jam" >Jam :</label>
                    <div class="col-sm-9">
                              <select class="form-control" name="jam" disabled>
                              <option value="" selected>Pilih Jam</option>
                              <?php
                              foreach ($jam as $v) {
                                
                                echo '<option value="'.$v->id_jam.'" ';
                                if($id_jam==$v->id_jam){echo 'selected';}
                              echo'>'.$v->jam.'</option>';
                              }?>
                              
                            </select>
               
                    </div>
                 </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <label class="control-label col-sm-5" for="jumlah_pengemudi" >Jumlah Pengemudi:</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" name="jumlah_pengemudi" placeholder="" value="<?php echo $jumlah_driver;?>" disabled>
                    </div>
                 </div>
                </div>
                </div>

                </div>

                 <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="kirim">Kirim
               </button></form>
            </div>
              
          
            </div>
        </section>
      </div>
      <!-- /.row -->
      
<?php 
          if($success==0){echo'
<div class="alert alert-danger">
  <strong>Peringatan!</strong> Nomer Rubrik Gagal Dimasukkan.
</div>';}?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

 <!-- Include Bootstrap Combobox -->
<link rel="stylesheet" href="<?php echo base_url()."/assets/";?>bootstrap-combobox/css/bootstrap-combobox.css">

<script src="<?php echo base_url()."/assets/";?>bootstrap-combobox/js/bootstrap-combobox.js"></script>

<style type="text/css">
/* Adjust feedback icon position */
#productForm .selectContainer .form-control-feedback,
#productForm .inputGroupContainer .form-control-feedback {
    right: -15px;
}
</style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
  $( function() {
    $( "#datepicker1" ).datepicker({
    format: 'dd-mm-yyyy'
});
  } );

  $( function() {
    $( "#datepicker2" ).datepicker({
    format: 'dd-mm-yyyy'
});
  } );

  $( function() {
    $( "#datepicker3" ).datepicker({
    format: 'dd-mm-yyyy'
});
  } );
  
  </script>
  
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>dist/js/demo.js"></script>

</body>
</html>