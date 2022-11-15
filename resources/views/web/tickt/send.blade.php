@extends('web.layout')
@section('title')
طلب الحجز
@endsection

@section('styles')
<style>


</style>
@endsection
@section('main')

<div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="container px-5 ">
        <div class="row align-items-center ">
           <section class="col-12 col-lg-6 d-none d-lg-block">
            <img src="{{ asset("web/img/confirmed.jpg")}}" >
           </section>
           <section class="col-12 col-lg-6 text-lg-start ">
             <h1>شكرا لاختيارك <span>مميز</span></h1>
           <h2>تم تأكيد حجزك بنجاح.</h2>
           <p>  سيتم التواصل معك قريبا 💜</p>
           <div >
             <a href="{{url("/")}}" class="btn btn-yellow py-2 px-4 mb-3">العودة الى الصفحة الرئيسية</a>
           </div>
        </section>	
        </div>
        
    </div>	
    </div>

@endsection