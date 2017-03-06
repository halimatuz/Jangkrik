
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <section class="col-lg-12 connectedSortable">
          
          <div class="box box-info">
            
            <div class="box-body">

              <form action="<?php echo base_url()."/index.php/Welcome/MasukanNoRubrik";?>" method="post" class="form-horizontal">
              <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="Kepada" >Kepada :</label>
                    <div class="col-sm-10">
                              <select class="form-control" name="Kepada" required>
                              <option value="" selected>Pilih Satuan Kerja</option>
                              <option value="" >DAEK</option>
                              <option value="s">DEP</option>
                              <option value="s">DSP</option>
                            </select>
                      </div>
                 </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="tanggal_1" >Tanggal :</label>
                    <div class="col-sm-10">
                   <input type="text" class="form-control" id="datepicker" name="tanggal_1"  required>
                    </div>
                 </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="perihal" >Perihal :</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="perihal" placeholder="" required>
                    </div>
                 </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="b_backdate" >Jenis Surat :</label>
                    <div class="col-sm-9">
                              <select class="form-control" name="jenis_surat" required>
                              <option value="" selected>Pilih Jenis Surat</option>
                              <option value="" >Biasa</option>
                              <option value="s">Rahasia</option>
                            </select>
               
                    </div>
                 </div>
                
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
    $( "#datepicker" ).datepicker({
    format: 'dd/mm/yyyy'
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
