
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <section class="col-lg-12 connectedSortable">
          
          <div class="box box-info">

           <?php 
          if($success==0){echo'
<div class="alert alert-danger">
  <strong>Peringatan!</strong> Nomer Rubrik Gagal Dimasukkan.
</div>';}
if($success==2){echo'
<div class="alert alert-danger">
  <strong>Peringatan!</strong> Nomer Rubrik Pada tanggal tersebut tidak tersedia.
</div>';}
?>
            
            <div class="box-body">

              <form action="<?php echo base_url()."/index.php/C_LDP/MasukanBackdate_Surat";?>" method="post" class="form-horizontal">
              <div class="row">
              <div class="col-sm-6">
              <div class="row">
                 <div class="col-sm-8">
                <div class="form-group">
                    <label class="col-xs-3 control-label" for="dari" >Dari :</label>
                    <div class="col-xs-9 selectContainer">
                         <select class="form-control"  id="selectBox" onchange="changeFunc();" name="dari_fungsi" required>
                            <option value="" selected>Pilih Fungsi </option> 
                            <?php foreach ($fungsi as $k){
                              echo '<option id="'.$k->id_divisi.'" value="'.$k->nama_fungsi.'">'.$k->nama_fungsi.'</option>';
                              }?>                           
                                                     
                        </select>                
                    </div>
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">          
                    <div class="col-sm-12">
                             <select class="form-control" id="selectBox2" name="dari_divisi" required>
                              <option value="" >Pilih Divisi</option>
                              <?php foreach ($divisi as $p){
                              echo '<option  id="'.$p->id_divisi.'" value="'.$p->nama_divisi.'">'.$p->nama_divisi.'</option>';
                              }?>  
                              </select>                   
                    </div>
                 </div>
                 </div>
                 </div>  
                </div>

                <div class="col-sm-6">
                
                 <div class="form-group">
                    <label class="col-xs-3 control-label" for="b_backdate" >Jenis Surat :</label>
                    <div class="col-xs-9 selectContainer">
                              <select class="form-control" name="jenis_surat" required>
                              <option value="" >Pilih Jenis Surat</option>
                              <option value="" selected>Biasa</option>
                              <option value="s">Rahasia</option>
                            </select>               
                    </div>
                 </div>
              </div>
              </div> <!-- end row-->


              <div class="row">
             <div class="col-sm-6">
              <div class="row">
                 <div class="col-sm-8">
                <div class="form-group">
                    <label class="col-xs-3 control-label" for="dari" >Kepada :</label>
                    <div class="col-xs-9 selectContainer">
                        <select class="form-control"  id="selectBox3" onchange="changeFunc2();" name="kpd_fungsi" required>
                            <option value="" selected>Pilih Fungsi </option> 
                            <?php foreach ($fungsi as $l){
                              echo '<option id="'.$l->id_divisi.'" value="'.$l->id_fungsi.'">'.$l->nama_fungsi.'</option>';
                              }?>                           
                                                     
                        </select>                  
                    </div>
                  </div>
                  </div>
                  <div class="col-sm-4">
                  <div class="form-group">          
                    <div class="col-sm-12">
                              <select class="form-control" id="selectBox4" name="kpd_divisi" required>
                              <option value="" >Pilih Divisi</option>
                              <?php foreach ($divisi as $w){
                              echo '<option  id="'.$w->id_divisi.'" value="'.$w->id_divisi.'">'.$w->nama_divisi.'</option>';
                              }?>  
                              </select>               
                    </div>
                 </div>
                 </div>
                 </div>  
                </div>
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="perihal" >Perihal :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" autocomplete="off" name="perihal" placeholder="" required>
                    </div>
                 </div>
                 </div>
                 </div>
                 
                 


                 <div class="row">
                 <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tanggal_1" >Tanggal :</label>
                    <div class="col-sm-10">
                   <input type="text" id="datepicker" autocomplete="off" name="tanggal_1" style="width: 100%; height: 16px; font-size: 16px; line-height: 18px; border: 1px solid #dddddd; padding: 17px;" required>
                    </div>
                 </div>
                 </div>
                 
                 </div>




              <div class="row">
              <div class="col-sm-6">             
              </div>
              </div>
                 <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="kirim">Kirim
               </button>
            </div>
              </form>
            </div>
           
          </div>

        </section>
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>
 
 
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    format: 'dd-mm-yyyy',
    todayHighlight: true,
    autoclose: true,
    endDate: '-1d'
});
  } );
  

  </script>
   <script type="text/javascript">

function changeFunc() {
var selectBox = document.getElementById("selectBox");
var selectedValue = selectBox.options[selectBox.selectedIndex].id;
if(selectedValue !=""){
  document.getElementById("selectBox2").selectedIndex=selectedValue;
}

}
function changeFunc2() {
var selectBox = document.getElementById("selectBox3");
var selectedValue = selectBox.options[selectBox.selectedIndex].id;
if(selectedValue !=""){
  document.getElementById("selectBox4").selectedIndex=selectedValue;
}

}
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
