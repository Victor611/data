<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class steps_img extends Model
{
    protected $table = 'steps_imgs';
    public $timestamps = false;
    protected $fillable = ['publish','id_name','imgsrc',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'texten','textru','textuk',
                            'position'];
}
