<ul class="navbar-nav bg-success sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
  
    </div>
    <div class="sidebar-brand-text mx-3">C-E SENEGAL</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>information</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('electeurs') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Parrainage</span></a>
  </li>
 
  
  <li class="nav-item">
    <a class="nav-link" href="/candidats">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Ajouter candidat</span></a>
  </li> 
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
</ul>
