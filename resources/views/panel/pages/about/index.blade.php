@extends('panel.layouts.app')
@section('title', 'Tentang')
@section('content')


<section class="section">
  <div class="section-header">
    <h1>Informasi Profil</h1>
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

  <div class="card">
    <div class="card-header">
      <span class="h4 font-weight-bold">Edit Informasi Profil</span>
    </div>
    <div class="card-body">
      @foreach($about as $a)

      <form action="/panel/about/{{$a->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        <div class="form-group">
		    <label for="nama">Nama</label>
		    <input id="nama" type="text" class="form-control" placeholder="{{ucfirst($a->nama)}}" disabled>
	  	</div>
	  	<div class="form-group">
		    <label for="nama_short">Nama (Singkat)</label>
		    <input id="nama_short" type="text" class="form-control" placeholder="{{ucfirst($a->nama_short)}}" disabled>
	  	</div>

	  	<x-input field="alamat" label="Alamat" type="text" note="{{$a->alamat}}"/>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" class="form-control deskripsi-artikel" placeholder="Tulis deskripsi disini">{{$a->deskripsi}}</textarea>
        </div>

        <x-input field="telepon" label="Telepon" type="number" note="{{$a->telepon}}"/>
        <x-input field="whatsapp" label="Whatsapp" type="number" note="{{$a->whatsapp}}"/>
        <x-input field="instagram" label="URL Akun Instagram" type="text" note="{{$a->instagram}}"/>
        <x-input field="youtube" label="URL Kanal Youtube" type="text" note="{{$a->youtube}}"/>
        <x-input field="facebook" label="URL Akun Facebook" type="text" note="{{$a->facebook}}"/>

        <button type="submit" class="btn btn-primary">Simpan</button>
        
        
      </form>
      @endforeach
    </div>
  </div>
  <div class="section-body">
  </div>
</section>
@endsection