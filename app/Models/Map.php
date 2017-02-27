<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $table = 'maps';
    public $timestamps = false;
    protected $fillable = ['publish','id_name',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'href','position'];
}
