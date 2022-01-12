<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <hr>
    <li class="{{ request()->is('panel/home') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/panel/home') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a></li>

    <!-- <li class="menu-header">Data Master</li> -->
    

    <li class="menu-header">Publikasi</li>
    
    <li class="{{ strpos(request()->url(),'panel/artikel') ? 'active' : '' }}"><a href="{{ url('panel/artikel') }}"><i class="fas fa-file-alt"></i> <span>Artikel</span></a></li>
    
    <hr>
    <li><a class="nav-link" href="/panel/logout"><i class="fas fa-sign-out-alt"></i> <span>Keluar</span></a></li>
  </ul>
</aside>
