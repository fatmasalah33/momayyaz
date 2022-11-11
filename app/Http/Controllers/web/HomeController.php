<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(){
        $data['Countries']=DB::table('countries')->select('id','name','img')->get();
        return view('web.home.index')->with($data);
    }
}
