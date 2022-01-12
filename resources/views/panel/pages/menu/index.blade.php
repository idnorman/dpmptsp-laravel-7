@extends('panel.layouts.app')
@section('title', 'Menu Navigasi')
@section('content')


<section class="section">
  <div class="section-header">
    <h1>Menu Navigasi</h1>
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
  <div class="row">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-primary createMenu"><i class="fas fa-plus"></i> Menu</a></button> 
        </div>
        <div class="card-body">
          <table id="menu" class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">URL</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @foreach($menu as $m)
                <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ ucfirst($m->nama) }}</td>
                <td>{{ $m->url}}</td>
                <td>
                  <button class="btn btn-sm btn-info"><a data-id="{{$m->id}}" data-nama="{{$m->nama}}" data-url="{{$m->url}}" class="updateMenu text-white"><i class="fas fa-edit"></i> Edit</a></button>
                  <button class="btn btn-sm btn-danger">
                  <a data-id="{{$m->id}}" data-type="menu" class="deleteMenu text-white" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Hapus</a>
                  </button>
                </td>
                </tr>
              @endforeach
              @foreach($category as $c)
              @if($c->is_menu == 'ya')
              <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{ ucfirst($c->nama) }}</td>
                <td>/{{ $c->slug}}</td>
                <td>
                  <a href="#" data-id="{{$c->id}}" data-type="kategori" class="btn btn-sm btn-danger deleteMenu" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Hapus</a>
                </td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-header">
          <span id="card-title" class="h4 font-weight-bold">Tambah Menu</span>
        </div>
        <div class="card-body">
          <form id="formMenu" action="/panel/menu" method="post">
          @csrf
          <input id="method" type="hidden" name="_method" value="post">
          <x-input field="nama" label="Nama Menu" type="text" placeholder="Isi nama menu disini"/>
          <x-input field="url" label="URL Menu" type="url" placeholder="http://..."/>
          <div class="form-group">
            <hr>
          <label class="form-label"><h5>Menu dari Kategori</h5></label>
          <div class="selectgroup selectgroup-pills">
            @foreach ($category as $c)
            <label class="selectgroup-item">
              <input type="checkbox" name="kategori[]" value="{{ $c->id }}" class="selectgroup-input" {{ ($c->is_menu == 'ya') ? 'checked' : '' }}>
              <span class="selectgroup-button">{{ucfirst($c->nama)}}</span>
            </label>
            @endforeach
            @error('kategori')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="section-body">
  </div>
</section>
<!-- Delete Warning Modal -->
<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formDelete" action="/" method="post">
          @csrf
          @method('DELETE')
          <input id="type" type="hidden" name="type" value="">
          <h5 class="text-center">Yakin menghapus data ini?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-danger pr-4 pl-4">Ya</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Delete Modal -->
@endsection