<?php

namespace c8data\Http\Controllers;

use c8data\Http\Requests;
use Illuminate\Http\Request;
use App;
use c8data\Models\Route;
use c8data\Models\Block;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function handle($page)
    {
        $page = Route::where('name', $page)->first();
        if (!$page) {
            abort(404);
        }
        $inc = '';
        $route = $page->id;
        $blocks = Block::where('route_id', $route)->where('publish', 1)->orderBy('position', 'asc')->get();
        $num = 10;
        foreach ($blocks as $block) {
            $n = '\\c8data\\Models\\' . ucfirst($block->blocks);
            $n = $n::where('id_name', $block->id_name)->where('publish', 1)->orderBy('position', 'asc')->get();
            $inc[$num . $block->blocks] = $n;
            $num++;
        };
        return view('index', ['pages' => $page, 'blocks' => $blocks, 'inc' => $inc]);
    }
}
