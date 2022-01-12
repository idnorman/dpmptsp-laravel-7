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
    <li class="{{ strpos(request()->url(),'panel/user') ? 'active' : '' }}"><a href="{{ url('panel/user') }}"><i class="fas fa-users"></i> <span>Pengguna</span></a></li>

    <li class="menu-header">Publikasi</li>
    <li class="{{ strpos(request()->url(),'panel/kategori') ? 'active' : '' }}"><a href="{{ url('panel/kategori') }}"><i class="fas fa-tags"></i> <span>Kategori</span></a></li>
    <li class="{{ strpos(request()->url(),'panel/artikel') ? 'active' : '' }}"><a href="{{ url('panel/artikel') }}"><i class="fas fa-file-alt"></i> <span>Artikel</span></a></li>
    <li class="{{ strpos(request()->url(),'panel/perizinan') ? 'active' : '' }}"><a href="{{ url('panel/perizinan') }}"><i class="fas fa-signature"></i> <span>Perizinan</span></a></li>
    <li class="{{ strpos(request()->url(),'panel/about') ? 'active' : '' }}"><a href="{{ url('panel/about') }}"><i class="fas fa-home"></i> <span>Profil</span></a></li>
    <li class="menu-header">Kustomisasi Web</li>
    <li class="{{ strpos(request()->url(),'panel/widget') ? 'active' : '' }}"><a href="{{ url('panel/widget') }}"><i class="fas fa-cubes"></i> <span>Widget/Banner</span></a></li>
    <li class="{{ strpos(request()->url(),'panel/menu') ? 'active' : '' }}"><a href="{{ url('panel/menu') }}"><i class="fas fa-list-ul"></i> <span>Menu Navigasi</span></a></li>
    

    <hr>
    <li><a class="nav-link" href="/panel/logout"><i class="fas fa-sign-out-alt"></i> <span>Keluar</span></a></li>
  </ul>
</aside>
