

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>MGS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MGS</b>CCTV</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/admin/images/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/admin/images/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
         
        </ul>
      </div>

    </nav>
  </header>


  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/images/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($this->uri->segment('1')=='home' || $this->uri->segment('1') ==''){ echo 'active';} ?>">
          <a href="<?php echo base_url();?>">
           <i class="fa  fa-dashboard (alias)"></i><span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php if($this->uri->segment('1')=='produk'){ echo 'active';} ?>">
          <a href="#">
            <i class="fa  fa-list-ol"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>produk"><i class="fa fa-circle-o"></i> Semua Produk</a></li>
            <li>
              <a href="<?php echo base_url();?>produk/jenis"><i class="fa fa-circle-o"></i> Jenis Produk
              </a>
            </li>
          </ul>
        </li>

        <li class="<?php if($this->uri->segment('1')=='news'){ echo 'active';} ?>">
          <a href="<?php echo base_url();?>news">
           <i class="fa fa-newspaper-o"></i><span>News & event</span>
          </a>
        </li>
        <li class="treeview <?php if($this->uri->segment('1')=='master'){ echo 'active';} ?>">
          <a href="#">
            <i class="fa  fa-list-ol"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="<?php echo base_url();?>master/support"><i class="fa fa-circle-o"></i> Support
              </a>
            </li>
            <li><a href="<?php echo base_url();?>master/tentang"><i class="fa fa-circle-o"></i> Tentang kami</a></li>
            <li><a href="<?php echo base_url();?>master/profil"><i class="fa fa-circle-o"></i> Kontak</a></li>
            <li><a href="<?php echo base_url();?>master/klien"><i class="fa fa-circle-o"></i> Klien</a></li>
            <li><a href="<?php echo base_url();?>master/pengiriman"><i class="fa fa-circle-o"></i> Pengiriman</a></li>
            <li><a href="<?php echo base_url();?>master/pembayaran"><i class="fa fa-circle-o"></i> Pembayaran</a></li>
          </ul>
        </li>

      <!--   <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
 -->      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
