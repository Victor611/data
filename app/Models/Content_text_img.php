<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Content_text_img extends Model
{
    protected $table = 'content_text_img';
    public $timestamps = false;
    protected $fillable = ['publish', 'id_name',
                            'imgsrc',
                            'anchor',
                            'titleen', 'titleru', 'titleuk',
                            'introen', 'introru', 'introuk',
                            'figuresrc', 'quote', 'c_class', 'position'];
}
