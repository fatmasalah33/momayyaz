<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DetailsController extends Controller
{
    public function show($id){
        $data['country']=DB::table('countries')->select('id','name','img')->where('id','=',$id)->first();
        $data['Countries']=DB::table('countries')->select('id','name','img')->get();
        return view('web.details.show')->with($data);
    }
}
