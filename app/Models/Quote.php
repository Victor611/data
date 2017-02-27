<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'quotes';
    public $timestamps = false;
    protected $fillable = ['publish','id_name',
                            'introen','introru','introuk',
                            'position'];
}
