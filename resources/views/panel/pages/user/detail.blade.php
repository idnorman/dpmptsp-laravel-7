@extends('panel.layouts.app')
@section('title', 'Profil ' . ucfirst($user['nama']))
@section('content')
@foreach (array($user) as $u)
@php
$penulis='';
$admin='';
if($u->level_user=='admin'){
$admin='checked';
$penulis='';
}else{
$penulis='checked';
$admin='';
}
@endphp
<section class="section">
	<div class="section-header">
		<h1>Profil {{ ucfirst($u->nama)}}</h1>
		
	</div>
	@if (Session::has('status'))
	<div class="alert alert-info alert-dismissible fade show" role="alert">
		{{ Session::get('status') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span class="small" aria-hidden="true">×</span>
		</button>
	</div>
	@endif
	 @if (Session::has('warning'))
	  <div class="alert alert-warning alert-dismissible fade show" role="alert">
	    {{ Session::get('warning') }}
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span class="small" aria-hidden="true">×</span>
	    </button>
	  </div>
	  @endif
	@if (Session::has('success'))
	  <div class="alert alert-success alert-dismissible fade show" role="alert">
	    {{ Session::get('success') }}
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span class="small" aria-hidden="true">×</span>
	    </button>
	  </div>
	  @endif
	<div class="section-body">
		<div class="row mt-sm-4">
			<div class="col-12 col-md-12 col-lg-5">
				<div class="card profile-widget">
					<div class="profile-widget-header">
						<img alt="image" src="{{url('images/users/'.$u->foto)}}" class="rounded-circle profile-widget-picture" width="50px" height="100px">
						<div class="profile-widget-items">
							<div class="profile-widget-item">
								<div class="profile-widget-item-label">Publikasi Tulisan</div>
								<div class="profile-widget-item-value">{{ $publikasi_tulisan }} Tulisan</div>
							</div>
							<!-- <div class="profile-widget-item">
								<div class="profile-widget-item-label">Followers</div>
								<div class="profile-widget-item-value">6,8K</div>
							</div>
							<div class="profile-widget-item">
								<div class="profile-widget-item-label">Following</div>
								<div class="profile-widget-item-value">2,1K</div>
							</div> -->
						</div>
					</div>
					@if(count($article)!=0)
					<div class="h4 text-center font-weight-bold">Publikasi Terbaru</div>
					<hr>
					@foreach($article as $key => $a)
					<div class="profile-widget-description pt-0 pb-0">
						<div class="profile-widget-name mt-0 mb-0 pt-0 pb-0 font-italic font-weight-bold">{{$a['judul']}}</div>
					</div>
					<hr>
					@endforeach
					@endif



					<!-- <div class="card-footer text-center">
						<div class="font-weight-bold mb-2">Follow Ujang On</div>
						<a href="#" class="btn btn-social-icon btn-facebook mr-1">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="#" class="btn btn-social-icon btn-twitter mr-1">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="#" class="btn btn-social-icon btn-github mr-1">
							<i class="fab fa-github"></i>
						</a>
						<a href="#" class="btn btn-social-icon btn-instagram">
							<i class="fab fa-instagram"></i>
						</a>
					</div> -->
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-7">
				<div class="card">
					<form method="post" action="/panel/user/{{$u->id}}" >
						@csrf
						@method('PUT')
						<div class="card-header">
							<h4>Edit Profil</h4>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-lg-6">
									<x-input field="nama" label="Nama" type="text" note="{{ ucfirst($u->nama)}}"/>
									
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" id="username" placeholder="{{ $u->username }}" disabled>
									</div>
									<x-input field="password" label="Password" type="password" placeholder="Isi password disini"/>
									<x-input field="password_confirmation" label="Konfirmasi Password" type="password" placeholder="Konfirmasi password"/> 
								</div>
								
								<div class="col-lg-6">
									<x-input field="nip" label="NIP" type="number" note="{{ $u->nip}}" />
									@if($curr_user['level_user'] == 'admin' && $curr_user['id'] != $u->id)
									<div class="form-group">
										<label class="form-label">Level User</label>
										<div class="selectgroup w-100">
											<label class="selectgroup-item col-lg-6">
												<input type="radio" name="level_user" value="penulis" class="selectgroup-input" {{$penulis}}>
												<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-edit mr-2"></i>Penulis</span>
											</label>
											<label class="selectgroup-item col-lg-6">
												<input type="radio" name="level_user" value="admin" class="selectgroup-input" {{$admin}}>
												<span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-cog mr-2"></i>Administrator</span>
											</label>
										</div>
									</div>
									@endif
									<x-upload field="foto" label="Upload Foto" ratio="Untuk hasil terbaik, gunakan foto dengan rasio 1:1 (Maks. ukuran 2MB)"/>
								</div>
							</div>
							<div class="card-footer text-center">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endforeach
	@endsection