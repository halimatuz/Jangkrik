
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="row">
    <div class="col-sm-10"><a><h3>Tabel Nomor Rubrik Surat Tugas</h3></a></div>
    <div class="col-sm-2">
    <a href="<?php echo base_url()."index.php/C_Surat_Tugas/TampilMasukanBackdate";?>"> <button  type="button" id="backdate" class="pull-right btn btn-default" id="sendEmail">Back Date</button>
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
<th>Tanggal Surat</th>
<th>Nama Ketua</th>
<th>NIP Ketua</th>
<th>Jabatan Ketua</th>
<th>Mulai</th>
<th>Berakhir</th>
<th>Tujuan</th>
<th>Kegiatan</th>
<th>Pengikut</th>
<th>Kebutuhan Pengemudi</th>
<th>Nama Penandatanganan</th>
<th>Jabatan Penandatanganan</th>

</tr>
</thead>
<tbody>
<?php
$i=0;
foreach ($surat as $row){
  $noSurat=explode('/',$row->nomor_surattugas);
$NewSurat=implode('-',$noSurat);
echo'<tr><td style="text-align:center"><a href="'.base_url().'/index.php/C_Surat_Tugas/TampilEditNoSuratTugas/'.$NewSurat.'">
            <i class="fa fa-edit"></i>
          </a></td>
';
  echo '
<td>'.$row->nomor_surattugas.'</td>
<td>'.$row->tanggal_surat.'</td>
<td>'.$row->nama.'</td>
<td>'.$row->nip.'</td>
<td>'.$row->jabatan.'</td>
<td>'.$row->tanggaldinas_mulai.'</td>
<td>'.$row->tanggaldinas_berakhir.'</td>
<td>'.$row->tujuan.'</td>
<td>'.$row->kegiatan.'</td>
<td><ul>';
foreach ($pengikut[$i] as $k){
if($pengikut[$i]!="")
  echo '<li>'.$k->nama_pengikut.'</li>';
}
echo'</ul></td>';
$driver='Tidak';
if($row->need_driver>1){
$driver='Ya';
}
echo '<td>'.$driver.'</td>
<td>'.$row->nama_signer.'</td>';
echo'<td>'.$row->jabatan_signer.'</td></tr>';
$i++;


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

 
</div>
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
        "order": [[ 1, "desc" ]],
        "scrollX": true,
        "columnDefs": [
    { "width": "100%", "targets": 0 }
  ]
    });
   
  });
</script>
</body>
</html>
