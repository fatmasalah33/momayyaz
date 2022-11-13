<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Comment;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index(){
        $data['Countries']=DB::table('countries')->select('id','name','img')->get();
        $data['comments']= Comment::get();
        $id=1;
        $data['banner']=Banner::findOrFail($id);
        //  dd( $data['comments']);
        return view('web.home.index')->with($data);
    }
    public function  all(){
        $data['Countries']=DB::table('countries')->select('id','name','img')->get();

     
        return view('web.country.index')->with($data);
    }
   

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|max:200',
            'country'=>'required|string|max:200',
            'comment'=>'required|string',
      
        ]);
 
        Comment::create([
            'name'=>$request->name,
            'country'=>$request->country,
            'comment'=>$request->comment
        ]);
        // dd($request->all());

       return redirect("/");
    }
}
