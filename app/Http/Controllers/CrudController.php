<?php

namespace c8data\Http\Controllers;

use Illuminate\Http\Request;
use c8data\Http\Requests;
use Image;
use Illuminate\Support\Facades\File;
use c8data\Models\Block;
use c8data\Models\Route;

error_reporting(E_ALL & ~E_NOTICE);

class CrudController extends Controller
{
	public function admin( Request $request, $method, $table, $id = false){
        if($method == 'create'){
            $table = '\\c8data\\Models\\' . ucfirst($table);
            $req_data = $request->except('_token');
            if($request->hasFile('imgsrc'))
            {
                $image = $request->file('imgsrc');
                $filename = time() .'.'. $image->getClientOriginalExtension();
                $img=Image::make($image);
                $img->save(public_path('assets/images/'.$filename));
                $req_data['imgsrc'] = $filename;
            }
            if($request->hasFile('figuresrc'))
            {
                $image = $request->file('figuresrc');
                $filename = time() .'.'. $image->getClientOriginalExtension();
                $img=Image::make($image);
                $img->save(public_path('assets/images/'.$filename));

                $req_data['figuresrc'] = $filename;
            }
            $table::create($req_data);
            return redirect('/admin');

        }elseif($method =='update'){
            $table = '\\c8data\\Models\\' . ucfirst($table);
            $data = $table::findOrFail($id);
            $req_data = $request->except('_token');
            if($request->hasFile('imgsrc'))
            {
                $image = $request->file('imgsrc');
                $filename = time() .'.'. $image->getClientOriginalExtension();
                $img=Image::make($image);
                $img->save(public_path('assets/images/'.$filename));
                $req_data['imgsrc'] = $filename;
                File::delete(public_path('assets/images/' . $data->imgsrc));
            }

            if($request->hasFile('figuresrc'))
            {
                $image = $request->file('figuresrc');
                $filename = time() .'.'. $image->getClientOriginalExtension();
                $img=Image::make($image);
                $img->save(public_path('assets/images/'.$filename));
                $req_data['figuresrc'] = $filename;
                File::delete(public_path('assets/images/' . $data->figuresrc));
            }
            $data->update($req_data);
            return redirect('/admin');
        }elseif($method == 'delete'){
            if($table == 'route'){
                $routes = Route::findOrFail($id);
                //echo"<pre>";var_dump($routes);exit;
                $blocks = Route::findOrFail($id)->block;
                if($blocks){
                    foreach($blocks as $block) {
                        $table = $table = '\\c8data\\Models\\' . ucfirst($block->blocks);
                        $id_name = $block->id_name;
                        $block->delete();
                        $any_table = $table::where('id_name', $id_name)->delete();
                        if($any_table->imgsrc){
                            File::delete(public_path('assets/images/' . $any_table->imgsrc));
                        }
                        if($any_table->figuresrc){
                            File::delete(public_path('assets/images/' . $any_table->figuresrc));
                        }
                    }
                }
                $routes->delete();
                return redirect('/admin');

            }elseif($table == 'block'){
                $data = Block::findOrFail($id);
                $table = '\\c8data\\Models\\' . ucfirst($data->blocks);
                $id_name = $data->id_name;
                $tab = $table::where('id_name', $id_name)->first();
                if($tab){
                $id = $tab->id;
                $tab = $table::findOrFail($id);
                if($data->imgsrc){
                    File::delete(public_path('assets/images/' . $data->imgsrc));
                }
                if($data->figuresrc){
                    File::delete(public_path('assets/images/' . $data->figuresrc));
                }
                    $tab->delete();
                }
                $data->delete();
                return redirect('/admin');
            }else{
                $table = '\\c8data\\Models\\' . ucfirst($table);
                $tab = $table::findOrFail($id);
                if($tab->imgsrc){
                    File::delete(public_path('assets/images/' . $tab->imgsrc));
                }
                if($tab->figuresrc){
                    File::delete(public_path('assets/images/' . $tab->figuresrc));
                }
                $tab->delete();
                return redirect('/admin');
            }
        }
	}
}

