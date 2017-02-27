<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;
use c8data\Models\Block;

class Route extends Model
{
    protected $table = 'route';
    public $timestamps = false;
    protected $fillable = ['name'];

    public function block(){
        return $this->hasMany('c8data\Models\Block')->orderBy("position", "ASC");
    }
}
