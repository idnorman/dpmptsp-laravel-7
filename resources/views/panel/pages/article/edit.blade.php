@extends('panel.layouts.app')
@section('title', 'Edit Artikel')
@section('content')


<section class="section">
  <div class="section-header">
    <h1>Edit Artikel</h1>
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
      <span class="h4 font-weight-bold">Edit Artikel</span>
    </div>
    <div class="card-body">
      @foreach(array($article) as $a)
      @php
        if($a->is_publish=='ya'){
        $ya='checked';
        $tidak='';
        }else{
        $tidak='checked';
        $ya='';
        }

        if($a->is_featured=='ya'){
        $fya='checked';
        $ftidak='';
        }else{
        $ftidak='checked';
        $fya='';
        }

        if($a->is_pinned=='ya'){
        $pya='checked';
        $ptidak='';
        }else{
        $ptidak='checked';
        $pya='';
        }
      @endphp
      <form action="/panel/artikel/{{$a->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <x-input field="judul" label="Judul Artikel" type="text" note="{{ ucwords($a->judul) }}"/>
        
        
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea id="deskripsi" name="deskripsi" class="form-control deskripsi-artikel"
          rows="5" cols="80">{{ ucfirst($a->deskripsi) }}</textarea>
        </div>
        
        <div class="form-group">
          <label class="form-label">Kategori</label>
          <div class="selectgroup selectgroup-pills">
            @foreach ($category as $c)
            <label class="selectgroup-item">
              <input type="checkbox" name="kategori[]" value="{{ $c->id }}" class="selectgroup-input" {{ strpos($a->kategori,(string)$c->id) ? 'checked' : '' }}>
              <span class="selectgroup-button">{{ucfirst($c->nama)}}</span>
            </label>
            @endforeach
            @error('kategori')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <x-upload field="thumbnail" label="Upload Thumbnail" ratio="*Untuk hasil terbaik, gunakan gambar dengan rasio 16:9 dengan resolusi minimal 1280x720" old="Thumbnail Saat Ini: {{$a->thumbnail}}"/>
        <div class="form-group">
          <label for="subjek">Subjek</label>
          <textarea id="subjek" name="subjek" class="form-control" placeholder="Tulis artikel disini">{!!html_entity_decode($a->subjek)!!}</textarea>
        </div>

        <div class="form-group">
          <label class="form-label">Artikel Unggulan</label>
          <div class="selectgroup w-100">
            <label class="selectgroup-item col-lg-3 col-md-3 col-sm-6">
              <input type="radio" name="is_featured" value="ya" class="selectgroup-input" {{$fya}}>
              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-edit mr-2"></i>Ya</span>
            </label>
            <label class="selectgroup-item col-lg-3 col-md-3 col-sm-6">
              <input type="radio" name="is_featured" value="tidak" class="selectgroup-input" {{$ftidak}}>
              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-cog mr-2"></i>Tidak</span>
            </label>
          </div>
        </div>


        <div class="form-group">
          <label class="form-label">Sematkan Artikel (Widget Informasi Penting)</label>
          <div class="selectgroup w-100">
            <label class="selectgroup-item col-lg-3 col-md-3 col-sm-6">
              <input type="radio" name="is_pinned" value="ya" class="selectgroup-input" {{$pya}}>
              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-edit mr-2"></i>Ya</span>
            </label>
            <label class="selectgroup-item col-lg-3 col-md-3 col-sm-6">
              <input type="radio" name="is_pinned" value="tidak" class="selectgroup-input" {{$ptidak}}>
              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-cog mr-2"></i>Tidak</span>
            </label>
          </div>
        </div>


        <div class="form-group">
          <label class="form-label">Status Publikasi</label>
          <div class="selectgroup w-100">
            <label class="selectgroup-item col-lg-3 col-md-3 col-sm-6">
              <input type="radio" name="is_publish" value="ya" class="selectgroup-input" {{$ya}}>
              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-edit mr-2"></i>Ya</span>
            </label>
            <label class="selectgroup-item col-lg-3 col-md-3 col-sm-6">
              <input type="radio" name="is_publish" value="tidak" class="selectgroup-input" {{$tidak}}>
              <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-cog mr-2"></i>Tidak</span>
            </label>
          </div>
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
CKEDITOR.replace( 'subjek', {
height: 500,
filebrowserUploadUrl: "{{route('gambarartikel', ['_token' => csrf_token() ])}}",
filebrowserUploadMethod: 'form',
});
</script>
@endsection