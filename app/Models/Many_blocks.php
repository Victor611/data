<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Many_blocks extends Model
{
    protected $table = 'many_blocks';
    public $timestamps = false;
    protected $fillable = ['publish','id_name','imgsrc',
                            'titleen','titleru','titleuk',
                            'position'];
}
