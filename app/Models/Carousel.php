<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousels';
    public $timestamps = false;
    protected $fillable = ['publish', 'id_name', 'imgsrc',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'btnhref',
                            'btnnameen','btnnameru','btnnameuk',
                            'modalhref',
                            'modalnameen','modalnameru','modalnameuk',
                            'position'];
}
