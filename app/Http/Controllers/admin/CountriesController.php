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
        $request->validate([
            'country_id'=>'required',
            'first_day'=>'required',
            'second_day'=>'required',
            'third_day'=>'required',
            'fourth_day'=>'required',
            'fifth_day'=>'required',
            'trip_includes'=>'required',
            'trip_does_not_include'=>'required',
         
        ]);
  
 
        Trip::create([
            'country_id'=>$request->country_id,
            'first_day'=>$request->first_day,
            'second_day'=>$request->second_day,
            'third_day'=>$request->third_day,
            'fourth_day'=>$request->fourth_day,
            'fifth_day'=>$request->fifth_day,
            'trip_includes'=>$request->trip_includes,
            'trip_does_not_include'=>$request->trip_does_not_include,
         
        ]);
        // dd($request->all());

       return redirect("/dashboard/countries");
    }
}
