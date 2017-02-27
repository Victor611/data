<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Steps_text extends Model
{
    protected $table = 'steps_texts';
    public $timestamps = false;
    protected $fillable = ['publish','id_name',
                            'titleen','titleru','titleuk',
                            'introen','introru','introuk',
                            'texten','textru','textuk',
                            'position'];
}
