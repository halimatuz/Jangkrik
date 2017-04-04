
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="row">
    <div class="col-sm-10"><a><h3>Tabel Nomor Rubrik Surat</h3></a></div>
    <div class="col-sm-2">
    <a href="<?php echo base_url()."index.php/C_Surat/TampilMasukanBackdate";?>"> <button  type="button" id="backdate" class="pull-right btn btn-default" id="sendEmail">Back Date</button>
 </a></div>
 </div>
                  
                    
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><b> <?php echo $Nosurat;?></b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
<tr>
<th>Edit</th>
<th>No Surat</th>
<th>Kepada</th>
<th>Perihal</th>
<th>Tanggal</th>


</tr>
</thead>
<tbody>
<?php
foreach ($surat as $row){
  $tgl_s=date("d-m-Y", strtotime($row->tanggal));
  $noSurat=explode('/',$row->nomor_surat);
$NewSurat=implode('-',$noSurat);
echo'<tr><td style="text-align:center"><a href="'.base_url().'/index.php/C_Surat/TampilEditNoSurat/'.$NewSurat.'">
            <i class="fa fa-edit"></i>
          </a></td>
';
  echo '
<td>'.$row->nomor_surat.'</td>
<td>'.$row->kepada.'</td>
<td>'.$row->perihal.'</td>
<td>'.$tgl_s.'</td></tr>';

}
?>

</tbody>
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."/assets/AdminLTE-2.3.7/";?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example2").DataTable( {
        "order": [[ 1, "desc" ]]
    });
   
  });
</script>
</body>
</html>
