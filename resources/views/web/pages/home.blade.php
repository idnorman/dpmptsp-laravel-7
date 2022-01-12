@extends('web.layouts.app')

@section('title', 'Portal')

@section('content')
	@include('web.partials.hero')
	@include('web.partials.popular')
	@include('web.partials.post')
@endsection