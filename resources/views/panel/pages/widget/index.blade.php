@extends('panel.layouts.app')
@section('title', 'Widget dan Banner')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Widget dan Banner</h1>
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
        <button class="btn btn-primary createWidget"><i class="fas fa-plus"></i> Widget/Banner</a></button>
      </div>
      <div class="card-body">
        <table id="menu" class="table table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($widget as $w)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ ucfirst($w->nama) }}</td>
              <td>{{ ucfirst($w->jenis)}}</td>
              <td>
                <button class="btn btn-sm btn-info"><a data-id="{{$w->id}}" data-nama="{{$w->nama}}" data-jenis="{{$w->jenis}}" data-value="{{$w->jenis=='widget' ? $w->kode : $w->gambar}}" class="updateWidget text-white"><i class="fas fa-edit"></i> Edit</a></button>
                @if($w->id=='1' XOR $w->id=='2')
                <button class="btn btn-sm btn-secondary">
                <a data-id="{{$w->id}}" class="resetWidget" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-sync-alt"></i> Reset Banner</a>
                </button>
                @else
                <button class="btn btn-sm btn-danger">
                <a data-id="{{$w->id}}" class="deleteWidget text-white" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Hapus</a>
                </button>
                @endif
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <span id="card-title" class="h4 font-weight-bold">Tambah Widget/Banner</span>
      </div>
      <div class="card-body">
        <form id="formWidget" action="/panel/widget" method="post" enctype="multipart/form-data">
          @csrf
          <input id="method" type="hidden" name="_method" value="post">
          <x-input field="nama" label="Nama Widget/Banner" type="text" placeholder="Isi nama widget/banner disini"/>
          <div class="form-group">
            <label class="form-label">Jenis</label>
            <div class="selectgroup w-100">
              <label class="selectgroup-item">
                <input id="widget" type="radio" name="jenis" value="widget" class="selectgroup-input" checked>
                <span class="selectgroup-button">Widget</span>
              </label>
              <label class="selectgroup-item">
                <input id="banner" type="radio" name="jenis" value="banner" class="selectgroup-input">
                <span class="selectgroup-button">Banner</span>
              </label>
            </div>
          </div>
          <div class="form-group" id="form-kode">
            <label for="kode">Kode HTML/Script</label>
            <textarea id="kode" name="kode" class="form-control deskripsi-artikel"
            placeholder="Tulis kode disini"></textarea>
          </div>
          <x-upload field="gambar_banner" label="Upload Banner"/>
          <div class="form-group" id="preview-banner">
            <label class="form-label">Preview Banner</label>
            <div class="ml-5 pt-2">
              <img alt="image" id="foto-banner" src="" class="" style="width: 100px; height: auto;">
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
        <h5 class="text-center" id="confirmation">Yakin menghapus data ini?</h5>
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