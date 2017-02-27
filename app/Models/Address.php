<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public $timestamps = false;
    protected $fillable = ['publish', 'id_name','titleen','titleru','titleuk','introen','introru','introuk','texten','textru','textuk','class'];
}
