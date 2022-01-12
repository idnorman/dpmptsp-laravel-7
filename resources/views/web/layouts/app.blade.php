@extends('web.layouts.skeleton')
@section('title')
  @yield('title', 'Portal')
@endsection
@section('app')
	@include('web.partials.header')
	@include('web.partials.menu')

	@yield('content')

	@include('web.partials.footer')
@endsection