@extends('panel.layouts.app')
@section('title', 'Perizinan')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Perizinan</h1>
  </div>
  <div class="card">
    <div class="card-header">
      <span class="h4 font-weight-bold">Tambah Perizinan</span>
    </div>
    <div class="card-body">
      <form action="/panel/perizinan" method="post" enctype="multipart/form-data">
        @csrf
        <x-input field="nama" label="Nama" type="text" placeholder="Nama izin..."/>

        <x-upload field="sop" label="Upload SOP"/>
        <x-upload field="formulir" label="Upload Formulir"/>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Tulis deskripsi disini"></textarea>
        </div>
        
        

        <button type="submit" class="btn btn-primary">Submit</button>
        
        
      </form>
    </div>
  </div>
  <div class="section-body">
  </div>
</section>
<script src="{{ asset('panels/ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'deskripsi', {
height: 500,
filebrowserUploadUrl: "{{route('gambarperizinan', ['_token' => csrf_token() ])}}",
filebrowserUploadMethod: 'form',
});

</script>
@endsection