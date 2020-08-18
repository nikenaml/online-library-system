<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <i class="fas fa-book"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Web Prog <sup>2</sup></div>
   </a>


  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Perpustakaan
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{site_url('pinjam/chart')}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{site_url('pinjam/read')}">
      <i class="fas fa-fw fa-book"></i>
      <span>Data Peminjaman</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{site_url('pinjam/report')}">
      <i class="fas fa-fw fa-file"></i>
      <span>Laporan Peminjaman</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{site_url('buku/read')}">
      <i class="fas fa-fw fa-book"></i>
      <span>Data Buku</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Latihan
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link" href="{site_url('chart')}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Chart</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-table"></i>
      <span>CRUD</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{site_url('ibu')}">Ibu</a>
        <a class="collapse-item" href="{site_url('anak')}">Anak</a>
      </div>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{site_url('export')}">
      <i class="fas fa-fw fa-download"></i>
      <span>Export</span>
    </a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->