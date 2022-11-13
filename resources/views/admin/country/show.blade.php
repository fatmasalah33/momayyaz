@extends('admin.layout')
@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> {{$country->name}}  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}" >Home</a></li>
              <li class="breadcrumb-item active">country</li>
         
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   


    <!-- Main content -->
    <div class="content container">
    <div class="section ps-5 pe-5">
  <div class="mt-0 mb-0 ms-auto me-auto custom-width">
    <div class="card card-format d-flex flex-row row">
      <div class="card-body col-6 m-auto">
       

        <form method="POST" action="{{url('dashboard/countries/store')}}"  enctype="multipart/form-data" >
         @csrf
         <h2 class="title" dir="rtl">تفاصيل البرنامج السياحي</h2>
                 <div class="input-group d-flex flex-column">
            <input class="form-control w-100 mb-1" type="hidden" placeholder="country_id"
             name="country_id" value="{{$country->id}}">

         
          </div>
        <div class="input-group d-flex flex-column">
            <input class="form-control w-100 mb-1" type="text" placeholder="First day"
             name="first_day">

         
          </div>
           
          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="text" placeholder="second day"
             name="second_day">

           
          </div>
     
      


          
 
          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="text" placeholder=" third day"
            name="third_day">

          
          </div>

          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="text" placeholder=" fourth day"
            name="fourth_day">

          
          </div>
          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="text" placeholder=" fifth day"
            name="fifth_day">

          
          </div>
          <h2 class="title">  مشتملات الرحلة</h2>
       
          <hr>
          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="text" placeholder=" trip includes"
            name="trip_includes">

          
          </div>

          <div class="input-group d-flex flex-column">
            <input class="form-control mb-1 mt-3 w-100" type="text" placeholder=" trip does not include"
            name="trip_does_not_include">

          
          </div>
          <div class="mt-2 d-inline-block me-3">
       
             <button class="btn btn-info ps-4 pe-4 pt-1 pb-1 " type="submit">Add </button>
          </div>


        </form>
      </div>
    </div>
  </div>
</div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection