/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";


//PREVIEW FOTO PROFIL SEBELUM UPLOAD
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#foto-profil').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#foto").change(function(){
        readURL(this);
});



$(document).on('click','.createMenu',function(){

var nama = 'Isi nama menu disini';
var url = 'http://';
var route = 'menu/';

$('#method').attr('value', 'POST');
$('#card-title').text('Tambah Menu');
$('#nama').attr('value', '');
$('#nama').attr('placeholder', nama);
$('#url').attr('value', '');
$('#url').attr('placeholder', url);
$('#formMenu').attr('action', route);

});

$(document).on('click','.updateMenu',function(){

var id = $(this).attr('data-id');
var nama = $(this).attr('data-nama');
var url = $(this).attr('data-url');
var route = 'menu/';
route = route + id;

$('#method').attr('value', 'PUT');
$('#card-title').text('Ubah Menu '+nama);
$('#nama').attr('value', nama);
$('#nama').attr('placeholder', nama);
$('#url').attr('value', url);
$('#url').attr('placeholder', url);
$('#formMenu').attr('action', route);

});



$(document).on('click','.createKategori',function(){

var nama = 'Isi nama kategori disini';
var deskripsi = 'Tulis deskripsi disini';
var route = 'kategori/';

$('#method').attr('value', 'POST');
$('#card-title').text('Tambah Kategori');
$('#nama').attr('value', '');
$('#nama').attr('placeholder', nama);
$('#deskripsi').text('');
$('#deskripsi').attr('placeholder', deskripsi);
$('#formKategori').attr('action', route);

});


$(document).on('click','.updateKategori',function(){

var id = $(this).attr('data-id');
var nama = $(this).attr('data-nama');
var deskripsi = $(this).attr('data-deskripsi');
var route = 'kategori/';
route = route + id;

$('#method').attr('value', 'PUT');
$('#card-title').text('Ubah Kategori '+nama);
$('#nama').attr('value', nama);
$('#nama').attr('placeholder', nama);
$('#deskripsi').text(deskripsi);
$('#deskripsi').attr('placeholder', deskripsi);
$('#formKategori').attr('action', route);

});

$(document).on('click','.deleteMenu',function(){
var type = $(this).attr('data-type');
var id = $(this).attr('data-id');
var url = 'menu/';
var route = url + id;
$('#formDelete').attr('action', route);
$('#type').attr('value', type);
});

$(document).on('click','.deleteKategori',function(){
var id = $(this).attr('data-id');
var url = 'kategori/';
var route = url + id;
$('#formDelete').attr('action', route);
});

$(document).on('click','.deleteUser',function(){
var id = $(this).attr('data-id');
var url = 'user/';
var route = url + id;
$('#formDelete').attr('action', route);
});

$(document).on('click','.deleteArtikel',function(){
var id = $(this).attr('data-id');
var url = 'artikel/';
var route = url + id;
$('#formDelete').attr('action', route);
});

$(document).on('click','.deletePerizinan',function(){
var id = $(this).attr('data-id');
var url = 'perizinan/';
var route = url + id;
$('#formDelete').attr('action', route);
});


//Widget/Banner


$(document).ready(function() {
    $("#form-kode").show();
    $("#gambar_banner").hide();
    $("#preview-banner").hide();
});


$(document).on('click','#widget',function(){

    $("#form-kode").show();
    $("#gambar_banner").hide();

});

$(document).on('click','#banner',function(){

    $("#form-kode").hide();
    $("#gambar_banner").show();

});

$(document).on('click','.createWidget',function(){

    
    var nama = '';
    var jenis = '';
    var value = '';
    var route = 'widget/';
    

    $('#method').attr('value', 'POST');
    $('#nama').attr('value', nama);
    $('#nama').attr('placeholder', 'Isi nama widget/banner disini');
    $('#formWidget').attr('action', route);
    $("#form-kode").show();
    $("#gambar_banner").hide();
    $("#preview-banner").hide();
    $('#card-title').text('Tambah Widget');
    $("#widget").prop('checked', true);
    $("#banner").prop('checked', false);
    $('#kode').text(value);
    $('#kode').attr('placeholder', 'Tulis kode disini');

});

$(document).on('click','.updateWidget',function(){

    var id = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    var jenis = $(this).attr('data-jenis');
    var value = $(this).attr('data-value');
    var route = 'widget/';
    route = route + id;

    $('#method').attr('value', 'PUT');
    $('#nama').attr('value', nama);
    $('#nama').attr('placeholder', nama);
    $('#formWidget').attr('action', route);

    if(jenis=='widget'){
        $("#form-kode").show();
        $("#gambar_banner").hide();
        $("#preview-banner").hide();

        $('#card-title').text('Ubah Widget '+nama);
        $("#widget").prop('checked', true);
        $("#banner").prop('checked', false);
        
        $('#kode').text(value);
        $('#kode').attr('placeholder', value);
        
    }else{
        var imageUrl = 'http://localhost:8000/_widget/banner/' + value;
        $("#form-kode").hide();
        $("#gambar_banner").show();
        $("#preview-banner").show();
        $("#foto-banner").attr('src', imageUrl);

        $('#card-title').text('Ubah Banner '+nama);
        $("#widget").prop('checked', false);
        $("#banner").prop('checked', true);
        

    }


});

function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#foto-banner').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#gambar_banner").change(function(){
        readURL(this);
});

$(document).on('click','.deleteWidget',function(){

$('#confirmation').text('Yakin menghapus data ini?');

var id = $(this).attr('data-id');
var url = 'widget/';
var route = url + id;
$('#formDelete').attr('action', route);
});

$(document).on('click','.resetWidget',function(){

$('#confirmation').text('Yakin mereset data ini?');

var id = $(this).attr('data-id');
var url = 'widget/';
var route = url + id;
$('#formDelete').attr('action', route);
});