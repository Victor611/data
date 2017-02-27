<?php

namespace c8data\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    public $timestamps = false;
    protected $fillable = ['publish','id_name','imgsrc',
                            'titleen','titleru','titleuk',
                            'nameen','nameru','nameuk',
                            'joben','jobru','jobuk',
                            'href_linkedin','href_twitter','href_facebook','href_google',
                            'position'];
}
