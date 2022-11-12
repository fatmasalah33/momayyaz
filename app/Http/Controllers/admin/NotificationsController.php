<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tickt;

class NotificationsController extends Controller
{
    public function index(){
        $data['notifications']= Tickt::get();
        return view('admin.notificati.index')->with($data);
    }
    public function show($id){
        $data['notification']=Tickt::findOrFail($id);
        return view('admin.notificati.show')->with($data);
    }

}
