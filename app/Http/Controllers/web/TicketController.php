<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tickt;
class TicketController extends Controller
{
    public function index(){
     
        return view('web.tickt.index');
    }
    public function send(){
        return view('web.tickt.send');
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required|string|max:200',
            'nationality'=>'required',
            'country'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'date_of_arrival'=>'required',
            'departure_date'=>'required',
            'booking_type'=>'required',
            'number_of_adults'=>'required',
            'number_of_children'=>'required',
            'other_details'=>'required'
        ]);
  
 
        Tickt::create([
            'name'=>$request->name,
            'nationality'=>$request->nationality,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'date_of_arrival'=>$request->date_of_arrival,
            'departure_date'=>$request->departure_date,
            'booking_type'=>$request->booking_type,
            'number_of_adults'=>$request->number_of_adults,
            'number_of_children'=>$request->number_of_children,
            'other_details'=>$request->other_details
        ]);
        // dd($request->all());

        return view('web.tickt.send');
    }
}
