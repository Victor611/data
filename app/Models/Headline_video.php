<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Headline_video extends Model
{
    protected $table = 'headline_video';
    public $timestamps = false;
    protected $fillable = ['publish','id_name','imgsrc',
                            'titleen','titleru','titleuk',
                            'videosrc','framesrc', 'position'];
}
