@extends('panel.layouts.skeleton')
@section('title')
  @yield('title', 'Dashboard')
@endsection
@section('app')
	<div class="main-wrapper">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      @include('panel.partials.topnav')
    </nav>
    <div class="main-sidebar">
      @if(auth()->user()->level_user == 'admin')
        @include('panel.partials.admin_sidebar')
      @elseif(auth()->user()->level_user == 'penulis')
        @include('panel.partials.penulis_sidebar')
      @endif
    </div>

    <!-- Main Content -->
    <div class="main-content">
      @yield('content')
    </div>
    <footer class="main-footer">
      @include('panel.partials.footer')
    </footer>
  </div>
@endsection
