<?php

namespace c8data\Http\Controllers;

use Illuminate\Http\Request;
use c8data\Models\Route;
use c8data\Models\Block;
use c8data\Http\Requests;

//error_reporting(E_ALL & ~E_NOTICE);

class AdminController extends Controller
{
    public function read($page = false, $id = false)
    {
        $menu = $this->menu(); //menu
        $id_name = '';
        if (!$page && !$id) {
            $table = 'route';
            $page = 'route';
            $contents = Route::all();
        } elseif ($page && !$id) {
            $id = Route::where('name', $page)->first();
            $route_id = $id->id;
            $contents = Block::where('route_id', $route_id)->orderBy('position', 'asc')->get();
            $table = 'block';
        } elseif ($page && $id) {
            $models = '\\c8data\\Models\\' . ucfirst($page);
            $contents = $models::where('id_name', $id)->orderBy('position', 'asc')->get();
            $table = $page;
            $id_name = $id;
        } else abort(404);
        return view('admin.index', ['menu' => $menu, 'contents' => $contents, 'page' => $page, 'id_name' => $id_name, 'table' => $table,]);
    }

    public function show_form($method = false, $page = false, $id = false)
    {
        $array = '';
        if ($method == 'create') {// show create form
            $array = $this->create($method, $page, $id);
        } elseif ($method == 'update') {//show update form
            $array = $this->update($method, $page, $id);
        } else {
            abort(404);
        }
        return view($array['addr'], $array['array']);
    }

    public function create($method, $page, $id)
    {
        $content = '';
        $menu = $this->menu();
        $array = ['addr' => 'admin.show'];

        if ($page == 'route') {
            $table = 'route';
        } else {
            if (!$id) {
                $id = Route::where('name', $page)->first();
                if(!$id){
                    echo 1111;
                }

                $table = 'block';
            } else {
                $table = $page;
            }
        }
        $array['array'] = ['menu' => $menu, 'page' => $page, 'id' => $id, 'table' => $table, 'content' => $content, 'method' => $method];
        return $array;
    }

    public function update($method, $page, $id){
        $menu = $this->menu();
        $table = $page;
        $content = $this->page_id($page, $id);
        $array = ['addr' => 'admin.show'];
        $array['array'] = ['menu' => $menu, 'page' => $page, 'id' => $id, 'table' => $table, 'content' => $content, 'method' => $method];
        return $array;
    }

    public function page_id($page, $id)
    {
        $table = '\\c8data\\Models\\' . ucfirst($page);
        return $model = $table::findOrFail($id);
    }

    public function menu()
    {
        $contents = Route::all();
        if (!$contents) {
            abort(404);
        }
        foreach ($contents as $p) {
            $route = $p->id;
            $blocks[$p->name] = Block::where('route_id', $route)->orderBy('position', 'asc')->get();
        }
        return $blocks;
    }
}
