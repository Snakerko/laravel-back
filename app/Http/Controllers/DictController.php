<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use App\Brand;
use App\Distributor;
use App\Size;
use App\Season;
use DB;

class DictController extends Controller
{
    public function execute(Request $request, $page) {
    	switch ($page) {
    		case 'color':
    			$items = Color::paginate(15);
                $dict = new Color(['name' => $request->name]);
    			break;
    		case 'brand':
    			$items = Brand::paginate(15);
                $dict = new Brand(['name' => $request->name]);
    			break;
    		case 'distributor':
    			$items = Distributor::paginate(15);
                $dict = new Distributor(['name' => $request->name]);
    			break;
    		case 'size':
    			$items = Size::paginate(15);
                $dict = new Size(['name' => $request->name]);
    			break;
    		case 'season':
    			$items = Season::paginate(15);
                $dict = new Season(['name' => $request->name]);
    			break;    		
    		default:
    			abort('404');
    			break;
    	}
        if($request->isMethod('post')) {
            $dict->save();
            //store
            return back();
        }
        //index
        return view('site.dict', ['items' => $items, 'page' => $page]);

    }

    public function editing(Request $request, $page, $id) {
        switch ($page) {
            case 'color':
                $items = Color::paginate(15);
                $dict = Color::find($id);
                break;
            case 'brand':
                $items = Brand::paginate(15);
                $dict = Brand::find($id);
                break;
            case 'distributor':
                $items = Distributor::paginate(15);
                $dict = Distributor::find($id);
                break;
            case 'size':
                $items = Size::paginate(15);
                $dict = Size::find($id);
                break;
            case 'season':
                $items = Season::paginate(15);
                $dict = Season::find($id);
                break;            
            default:
                abort('404');
                break;
        }
        if($request->isMethod('delete')) {
            $dict->delete();
            //delete
            return back();
        }
        if($request->isMethod('post')) {
            $input = $request->toArray();
            $dict->fill($input);
            $dict->save();
            //update
            return redirect()->route('dict', ['page' => $page]);
        }
        $old = $dict;
        return view('site.dict', ['items' => $items, 'page' => $page, 'old' => $old]);
    }
}
