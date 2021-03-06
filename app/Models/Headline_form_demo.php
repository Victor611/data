<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Headline_form_demo extends Model
{
    protected $table = 'headline_form_demo';
    public $timestamps = false;
    protected $fillable = ['publish', 'id_name','imgsrc',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'btnnameen','btnnameru','btnnameuk',
                            'noteen', 'noteru', 'noteuk',
                            'position'];
}
