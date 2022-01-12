@extends('panel.layouts.app')
@section('title', 'Artikel')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Artikel</h1>
  </div>
  @if (Session::has('status'))
  <div class="alert alert-info alert-dismissible fade show" role="alert">
    {{ Session::get('status') }}
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

  @if (Session::has('warning'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ Session::get('warning') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span class="small" aria-hidden="true">×</span>
    </button>
  </div>
  @endif
  <div class="card">
    <div class="card-header">
      <a href="artikel/create" class="btn btn-primary"><i class="fas fa-plus"></i> Artikel</a>
    </div>
    <div class="card-body">
      <table id="artikel" class="table table-sm">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Kategori</th>
            @if(auth()->user()->level_user=='admin')
            <th scope="col">Penulis</th>
            @endif
            <th scope="col">Publikasi</th>
            <th scope="col">Tersemat</th>
            <th scope="col">Unggulan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($article as $a)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ ucfirst($a->judul) }}</td>
            <td>
              @foreach ($category as $c)
              @if((strpos($a->kategori,(string)$c->id)))

                <label class="selectgroup-item">
                <input class="selectgroup-input">
                <span class="btn btn-light disabled">{{ucfirst($c->nama)}}</span>
                </label>
              @endif
              @endforeach
            </td>
             @if(auth()->user()->level_user=='admin')
            <td>
              <span>{{ucfirst($a->nama)}}</span>
            </td>
            @endif
            <td>
              <span class="btn disabled">{{ucfirst($a->is_publish)}}</span>
            </td>
            <td>
              <span class="btn disabled">{{ucfirst($a->is_pinned)}}</span>
            </td>
            <td>
              <span class="btn disabled">{{ucfirst($a->is_featured)}}</span>
            </td>
            <td>
              <a href="artikel/{{$a->id}}/edit" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a>
              <a href="#" data-id="{{$a->id}}" class="btn btn-sm btn-danger deleteArtikel" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash"></i> Hapus</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
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