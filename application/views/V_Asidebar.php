
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>J</b>KR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Jangkrik</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
         <?php if($active=='rubrik') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."index.php/C_Surat";?>">
            <i class="fa fa-table"></i>
            <span>Ambil Nomor Rubrik</span>
          </a>
        </li>
        <?php if($active=='surat') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."index.php/C_Surat/TampilkanNomerRubrik_surat2";?>">
            <i class="fa fa-files-o"></i>
            <span>Surat</span>
          </a>
        </li>
        <?php if($active=='surat_tugas') echo '<li class="active treeview">';
              else 
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."index.php/C_Surat_Tugas/TampilkanNomerRubrik_suratTugas2";?>">
            <i class="fa fa-book"></i>
            <span>Surat Tugas</span>
          </a>
        </li>  
        <?php if($active=='memo') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."index.php/C_Memo/TampilkanNomerRubrik_surat2";?>">
            <i class="fa fa-share"></i>
            <span>Memo</span>
          </a>
        </li>
        <?php if($active=='ldp') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."index.php/C_LDP/TampilkanNomerRubrik_surat2";?>">
            <i class="fa fa-edit"></i>
            <span>LDP</span>
          </a>
         
        </li>
        <?php if($active=='catatan') echo '<li class="active treeview">';
              else
                echo'<li class="treeview">';
         ?>
          <a href="<?php echo base_url()."index.php/C_Catatan/TampilkanNomerRubrik_surat2";?>">
            <i class="fa fa-envelope"></i>
            <span>Catatan</span>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
