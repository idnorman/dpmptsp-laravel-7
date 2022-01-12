<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
	protected $table = 'menu';
    protected $guarded = ['id'];
}
