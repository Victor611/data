<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Headline_text extends Model
{
    protected $table = 'headline_text';
    public $timestamps = false;
    protected $fillable = ['publish','id_name','imgsrc',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'position'];
}
