    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url() ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SBR Admin <sup>2019</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('Dashboard');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'Blogs' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/Blog');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Blogs</span></a>
      </li>
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $this->uri->segment(2) == 'Slideshow' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/Slideshow');?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Slideshow</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
