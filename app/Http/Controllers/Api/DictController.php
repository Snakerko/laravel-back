<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    			$items = Color::all();
                $dict = new Color(['name' => $request->name]);
    			break;
    		case 'brand':
    			$items = Brand::all();
                $dict = new Brand(['name' => $request->name]);
    			break;
    		case 'distributor':
    			$items = Distributor::all();
                $dict = new Distributor(['name' => $request->name]);
    			break;
    		case 'size':
    			$items = Size::all();
                $dict = new Size(['name' => $request->name]);
    			break;
    		case 'season':
    			$items = Season::all();
                $dict = new Season(['name' => $request->name]);
    			break;    		
    		default:
    			abort('404');
    			break;
    	}
        /*$className = app(ucfirst($page));
        $items = $className::all();
        $dict = new $className(['name' => $request->name]);*/
        if($request->isMethod('post')) {
            $dict->save();
            //store
            return $dict;
        }
        //index
        return ['items' => $items, 'page' => $page];

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
            return '';
        }
        if($request->isMethod('post')) {
            $input = $request->toArray();
            $dict->fill($input);
            $dict->save();
            //update
            return $dict;
        }
        $old = $dict;
        return ['items' => $items, 'page' => $page, 'old' => $old];
    }
}
