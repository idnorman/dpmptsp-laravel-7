@extends('panel.layouts.app')
@section('title', 'Tambah Kategori')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Kategori Artikel</h1>
  </div>
  <div class="card">
    <div class="card-header">
      <span class="h4 font-weight-bold">Tambah Kategori Artikel</span>
    </div>
    <div class="card-body">
      <form action="/panel/kategori" method="post" enctype="multipart/form-data">
        @csrf
        <div>
          <x-input field="nama" label="Nama Kategori" type="text" placeholder="Isi nama kategori disini"/>
          
          <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
              <textarea id="deskripsi" name="deskripsi" class="form-control"
              rows="5" cols="80" placeholder="Tulis deskripsi disini" data-maxlength="10"></textarea>  
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      
    </form>
  </div>
</div>
<div class="section-body">
</div>
</section>
<script src="https://cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'deskripsi');
</script>
@endsection