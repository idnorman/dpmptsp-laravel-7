<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Session;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	protected $table = 'artikel';
    protected $guarded = ['id'];

    public function setKategoriAttribute($value)
    {
        $this->attributes['kategori'] = json_encode($value);
    }

    public static function cekPenulis($id){
        $user = Auth::user()->id;
        $penulis = self::where('id', $id)->where('penulis', $user)->first();

        if($penulis==null){
            Session::flash('warning', 'Maaf, anda tidak memiliki hak akses');
            return true;
        }else{
            return false;
        }
    }

    // public function getKategoriAttribute($value)
    // {
    //     return $this->attributes['kategori'] = json_decode($value);
    // }
}
