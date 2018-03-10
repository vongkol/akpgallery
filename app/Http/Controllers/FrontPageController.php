<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
class FrontPageController extends Controller
{
    public function index()
    {    
        $data["categories"] = DB::table('categories')
        ->where('active',1)
        ->get();
        return view('.fronts.pages.index', $data);
    }
    public function detail($id)
    {
        $data["categories"] = DB::table('categories')
        ->where('active',1)
        ->get();
        
        $data['gallery'] = DB::table('gallerys')
            ->where('id',$id)->first();
        return view('fronts.pages.detail', $data);
    }

    public function list(Request $r) 
    {
        $data["categories"] = DB::table('categories')
        ->where('active',1)
        ->get();

        $data["gallerys"] = DB::table('gallerys')
        ->orderBy('id', 'desc')
        ->where('category_id', '=', $r->id)
        ->where('active',1)
        ->paginate(120);
        return view('.fronts.pages.list-gallery',$data);
    }
}

