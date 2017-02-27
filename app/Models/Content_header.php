<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Content_header extends Model
{
    protected $table = 'content_headers';
    public $timestamps = false;
    protected $fillable = ['publish', 'id_name',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'position'];
}
