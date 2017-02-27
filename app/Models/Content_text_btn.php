<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Content_text_btn extends Model
{
    protected $table = 'content_text_btns';
    public $timestamps = false;
    protected $fillable = ['publish', 'id_name',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'btnhref',
                            'btnnameen','btnnameru','btnnameuk',
                            'position'];
}
