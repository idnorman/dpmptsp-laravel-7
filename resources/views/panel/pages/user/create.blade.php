@extends('panel.layouts.app')
@section('title', 'Tambah Data Pengguna')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Pengguna</h1>
  </div>
  <div class="card">
    <div class="card-header">
      <span class="h4 font-weight-bold">Tambah Data Pengguna</span>
    </div>
    <div class="card-body">
      <form action="/panel/user" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <x-input field="nama" label="Nama" type="text" placeholder="Isi nama disini"/>
            <x-input field="nip" label="NIP" type="number" placeholder="Isi NIP disini" />
            <x-input field="username" label="Username" type="text" placeholder="Isi username disini"/>
            <x-input field="password" label="Password" type="password" placeholder="Isi password disini"/>
            <x-input field="password_confirmation" label="Konfirmasi Password" type="password" placeholder="Konfirmasi password"/> 
          </div>
          
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-label">Level User</label>
              <div class="selectgroup w-100">
                <label class="selectgroup-item col-lg-6">
                  <input type="radio" name="level_user" value="penulis" class="selectgroup-input" checked="true">
                  <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-edit mr-2"></i>Penulis</span>
                </label>
                <label class="selectgroup-item col-lg-6">
                  <input type="radio" name="level_user" value="admin" class="selectgroup-input">
                  <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-user-cog mr-2"></i>Administrator</span>
                </label>
              </div>
            </div>
            
            <x-upload field="foto" label="Upload Foto" ratio="Untuk hasil terbaik, gunakan foto dengan rasio 1:1 (Maks. ukuran 2MB)"/>
            <div class="form-group ml-5">
              <label class="form-label">Preview Foto Profil (Default)</label>
              <div class="ml-2">
                <img alt="image" id="foto-profil" src="{{ url('/images/users/default.png')}}" class="rounded-circle profile-widget-picture" width="100px" height="100px">
              </div> 
            </div>
            
            
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
        
      </form>
    </div>
  </div>
  <div class="section-body">
  </div>
</section>
@endsection