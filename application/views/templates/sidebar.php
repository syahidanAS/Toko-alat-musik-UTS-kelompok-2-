
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
        <div class="sidebar-brand-icon ">
         <i class="fab fa-app-store-ios"></i>
        </div>
        <div  class="sidebar-brand-text mx-3" >ARZ MUSIC </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        KATEGORI
      </div>

      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/drum') ?>">
          <i class="fas fa-fw fa-drum"></i>
          <span>Drum</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/bass') ?>">
          <i class="fas fa-fw fa-guitar"></i>
          <span>Bass</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/gitar') ?>">
          <i class="fas fa-fw fa-guitar"></i>
          <span>Gitar</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/key') ?>">
          <i class="fas fa-fw fa-music"></i>
          <span>Key</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <?php
                    $keranjang = 'Keranjang Belanja : '.$this->cart->total_items(). ' items' 
                    ?>

                    <?php  echo anchor('dashboard/detail_keranjang',$keranjang )  ?>
                  
                </li>
              </ul>
            </div>

           
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Syahidan Arrizaldy</span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('uploads/pribadi.jpg') ?>">
              </a>
             
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->