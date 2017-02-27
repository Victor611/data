<?php

namespace c8data\Http\Controllers;

use Illuminate\Http\Request;

use c8data\Http\Requests;

class BlocksController extends Controller
{
    public static function block_name(){
        return $block_name = [  'carousel', 'address','content_header','content_text_btn',
                                'content_text_img','headline_form_contact','headline_form_demo',
                                'headline_text','headline_video','many_blocks','map','quote','steps_img',
                                'steps_text','tabbed','team','tryNow'];
    }
    public static function route(){
        return $blocks = ['name'];
    }

    public static function block(){
        return $blocks = ['publish','route_id','block', 'id_block'];
    }
    public static function address(){
        return $blocks = ['publish', 'id_name','title','intro','text','class'];
    }
    public static function carousel(){
        return $blocks = ['publish', 'id_name', 'imgsrc', 'title', 'intro', 'btnhref', 'btnname', 'modalhref', 'modalname'];
    }
    public static function content_header(){
        return $blocks = ['publish', 'id_name','title','intro'];
    }
    public static function content_text_btn(){
        return $blocks = ['publish', 'id_name', 'title', 'intro', 'btnhref', 'btnname'];
    }
    public static function content_text_img(){
        return $blocks = ['publish', 'id_name', 'imgsrc', 'anchor', 'title', 'intro', 'figuresrc', 'quote', 'c_class'];
    }
    public static function headline_form_contact(){
        return $blocks = ['publish', 'id_name', 'imgsrc', 'title', 'intro', 'btnname', 'note'];
    }
    public static function headline_form_demo(){
        return $blocks = ['publish', 'id_name','imgsrc','title','intro','btnname','note'];
    }
    public static function headline_text(){
        return $blocks = ['publish','id_name','imgsrc','title','intro'];
    }
    public static function headline_video(){
        return $blocks = ['publish','id_name','imgsrc','title','videosrc','framesrc'];
    }
    public static function many_block(){
        return $blocks = ['publish','id_name','imgsrc','title'];
    }
    public static function map(){
        return $blocks = ['publish','id_name','title','intro','href'];
    }
    public static function quote(){
        return $blocks = ['publish','id_name','intro'];
    }
    public static function steps_img(){
        return $blocks = ['publish','id_name','imgsrc','title','intro','text'];
    }
    public static function steps_text(){
        return $blocks = ['publish','id_name','title','intro', 'text'];
    }
    public static function team(){
        return $blocks = ['publish','id_name','imgsrc','title','name','job','hrefsocial'];
    }
    public static function tryNow(){
        return $blocks = ['publish','id_name','imgsrc','title','intro','btnhref','btnname'];
    }
}

