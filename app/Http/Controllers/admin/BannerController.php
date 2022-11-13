<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function index(){
        $id=1;
        $data['banner']=Banner::findOrFail($id);
        return view('admin.banners.index')->with($data);
    }
    public function store(Request $request )
    { 
        
        $id=1;
        if($request->slide_1){
            $newimagename=time() . '-' . 'slide_1' . '.' . $request->slide_1->extension();
            $request->slide_1->move(public_path('web/img'),$newimagename);
            // dd($newimagename);
            $banner=Banner::find($id);
            $banner->slide_1=$newimagename;
            $banner->save();
        }
        if($request->slide_2){
            $newimagename=time() . '-' . 'slide_2' . '.' . $request->slide_2->extension();
            $request->slide_2->move(public_path('web/img'),$newimagename);
            // dd($newimagename);
            $banner=Banner::find($id);
            $banner->slide_2=$newimagename;
            $banner->save();
        }
        if($request->slide_3){
            $newimagename=time() . '-' . 'slide_3' . '.' . $request->slide_3->extension();
            $request->slide_3->move(public_path('web/img'),$newimagename);
            // dd($newimagename);
            $banner=Banner::find($id);
            $banner->slide_3=$newimagename;
            $banner->save();
        }
        $data['banner']=Banner::find($id);
        return view('admin.banners.index')->with($data);
    }
}
