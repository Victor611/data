<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;
use c8data\Models\Route;

class Block extends Model
{
    protected $table = 'blocks';
    public $timestamps = false;
    protected $fillable  = ['route_id', 'blocks', 'id_name', 'position', 'publish'];

    public function route()
    {
        return $this->belongsTo('c8data\Models\Route');
    }

}
