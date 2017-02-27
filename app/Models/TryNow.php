<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class TryNow extends Model
{
    protected $table = 'tryNows';
    public $timestamps = false;
    protected $fillable = ['publish','id_name','imgsrc',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'btnhref',
                            'btnnameen','btnnameru','btnnameuk',
                            'position'];
}
