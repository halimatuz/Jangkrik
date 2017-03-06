<style>.current{
   color: #ffffff;
   background:#b2b2b2;
   padding: 5px;
}</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
       <?php echo $judul;?>
      </h1>
      

    </section>

    <!-- Main content -->
    <section class="content">
    <p><a class="<?php if($top==1){ echo 'current';}?>" href="<?php echo base_url().'index.php/C_Surat';?>">Surat</a> |
     <a class="<?php if($top==2){ echo 'current';}?>" href="<?php echo base_url().'index.php/C_Surat_Tugas';?>">Surat Tugas </a> |
      <a class="<?php if($top==3){ echo 'current';}?>" href="<?php echo base_url().'index.php/C_Memo';?>">Memo</a> |
       <a class="<?php if($top==4){ echo 'current';}?>" href="<?php echo base_url().'index.php/C_LDP';?>">LDP</a> 
       | <a class="<?php if($top==5){ echo 'current';}?>" href="<?php echo base_url().'index.php/C_Catatan';?>">Catatan </a></p>
