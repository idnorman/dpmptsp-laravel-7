@extends('panel.layouts.app')
@section('title', 'Perizinan')
@section('content')


<section class="section">
  <div class="section-header">
    <h1>Perizinan</h1>
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
      <span class="h4 font-weight-bold">Edit Perizinan</span>
    </div>
    <div class="card-body">
      @foreach(array($perizinan) as $p)

      <form action="/panel/perizinan/{{$p->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <x-input field="nama" label="Nama" type="text" placeholder="Nama izin..." note="{{$p->nama}}"/>

        <x-upload field="sop" label="Upload SOP" old="SOP Saat Ini: {{$p->sop}}"/>
        <x-upload field="formulir" label="Upload Formulir" old="Formulir Saat Ini: {{$p->formulir}}"/>
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Tulis deskripsi disini">{!!html_entity_decode($p->deskripsi)!!}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        
        
      </form>
      @endforeach
    </div>
  </div>
  <div class="section-body">
  </div>
</section>
<script src="{{ asset('panels/ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'deskripsi', {
height: 500,
filebrowserUploadUrl: "{{route('gambarartikel', ['_token' => csrf_token() ])}}",
filebrowserUploadMethod: 'form',
});
</script>
@endsection