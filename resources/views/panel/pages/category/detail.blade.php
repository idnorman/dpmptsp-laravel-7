@extends('panel.layouts.app')
@section('title', $category[0]['nama'])
@section('content')
@foreach ($category as $c)
@php
@endphp
<section class="section">
	<div class="section-header">
		<h1>{{ ucfirst($c->nama)}}</h1>

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
	
	<div class="section-body">
		<div class="row mt-sm-4">
			<div class="col-12 col-md-12 col-lg-5">
				<div class="card card-primary">
					<div class="profile-widget mt-0 mb-0">
						<div class="profile-widget-description pb-0">
							<div class="profile-widget-name h4 font-weight-bold">{{ ucfirst($c->nama) }}</div><hr>
							{!!html_entity_decode($c->deskripsi)!!}
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-12 col-lg-7">
				<div class="card">
					<form method="post" action="/panel/kategori/{{$c->id}}" >
						@csrf
						@method('PUT')
						<div class="card-header">
							<h4>Edit Kategori</h4>
						</div>
						<div class="card-body">
							<x-input field="nama" label="Nama Kategori" type="text" note="{{ ucfirst($c->nama)}}"/>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea id="deskripsi" name="deskripsi" class="form-control"
								rows="5" cols="80">{!!html_entity_decode($c->deskripsi)!!}</textarea>
							</div>
							<button type="submit" class="btn btn-primary">Simpan</button>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endforeach
<script src="https://cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'deskripsi');
</script>
@endsection