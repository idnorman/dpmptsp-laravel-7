<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Perizinan extends Model
{
	protected $table = 'perizinan';
    protected $guarded = ['id'];
}
