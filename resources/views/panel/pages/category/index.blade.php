@extends('panel.layouts.app')
@section('title', 'Kategori')
@section('content')


<section class="section">
  <div class="section-header">
    <h1>Kategori</h1>
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
          <button class="btn btn-primary createKategori"><i class="fas fa-plus"></i> Kategori</a></button> 
        </div>
        <div class="card-body">
          <table id="kategori" class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($category as $c)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ ucfirst($c->nama) }}</td>
                <td>{{ $c->deskripsi}}</td>
                <td>
                  <button class="btn btn-sm btn-info"><a data-id="{{$c->id}}" data-nama="{{$c->nama}}" data-deskripsi="{{$c->deskripsi}}" class="updateKategori text-white mr-2"><i class="fas fa-edit"></i> Edit</a></button>
                  <button class="btn btn-sm btn-danger">
                  <a data-id="{{$c->id}}" data-type="menu" class="deleteKategori text-white" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Hapus</a>
                  </button>
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
          <span id="card-title" class="h4 font-weight-bold">Tambah Kategori</span>
        </div>
        <div class="card-body">
          <form id="formKategori" action="/panel/kategori" method="post">
          @csrf
          <input id="method" type="hidden" name="_method" value="post">
          <x-input field="nama" label="Nama Kategori" type="text" placeholder="Isi nama kategori disini"/>
          <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" class="form-control deskripsi-artikel"
          rows="5" cols="80" placeholder="Tulis deskripsi disini"></textarea>
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