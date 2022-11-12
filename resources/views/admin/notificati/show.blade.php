@extends('admin.layout')
@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">notifications </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}" >Home</a></li>
              <li class="breadcrumb-item active">notifications </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <section class="content">

          <div class="card" >
          
            <ul class="list-group list-group-flush">
                <li class="list-group-item">name:  {{$notification->name}}</li>
                <li class="list-group-item"> nationality : {{$notification->nationality}}</li>
                <li class="list-group-item"> country : {{$notification->country}}</li>
                <li class="list-group-item"> phone : {{$notification->phone}}</li>
                <li class="list-group-item"> email: {{$notification->email}}</li>
                <li class="list-group-item"> date_of_arrival : {{$notification->date_of_arrival}}</li>
                <li class="list-group-item"> departure_date : {{$notification->departure_date}}</li>
                <li class="list-group-item"> booking_type: {{$notification->booking_type}}</li>
                <li class="list-group-item"> number_of_adults : {{$notification->number_of_adults}}</li>
                <li class="list-group-item"> number_of_children: {{$notification->number_of_children}}</li>
                <li class="list-group-item">other_details: {{$notification->other_details}}</li>
               
                
            </ul>
          </div>
        </section>
   
  </div>
  <!-- /.content-wrapper -->


@endsection