<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Trip;

class CountriesController extends Controller
{
    public function index(){
        $data['Countries']=DB::table('countries')->select('id','name','img')->get();
        return view('admin.country.index')->with($data);
    }
    public function show($id){
        $data['country']=DB::table('countries')->select('id','name','img')->where('id','=',$id)->first();
        return view('admin.country.show')->with($data);
    }
    public function store(Request $request){
 
        dd($request->all());

       return redirect("/");
    }
}
