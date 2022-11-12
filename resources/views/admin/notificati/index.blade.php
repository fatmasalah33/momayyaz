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

    <section class="section">
      <div class="container">
        <div class="row justify-content-center">
        </div>
          <div class="row">
              <div class="col-md-12">
            
                <div class="table-wrap">
                      <table class="table table-striped">
                          <thead class="thead-primary">
                              <tr class="text-center">
                              
                                <th>name</th>
                                <th>nationality</th>
                                <th>country</th>
                                <th>phone</th>
                                <th >Action</th>
                              </tr>
                          </thead>
                         
                          @foreach ($notifications as $notification)
                          <tr class="text-center" >
                           
                            <td> {{$notification->name}}</td>
                            <td>{{$notification->nationality}} </td>
                            <td>{{$notification->country}} </td>
                            <td>{{$notification->phone}}</td>
                            
                           
                            
                            <td> <a style="cursor: pointer;" href="{{url("/dashboard/notifications/show/$notification->id")}}">
                            <i class='fas fa-sharp fa-solid fa-eye  '></i>  
                            </a></td>
                       
                        </tr>
                        @endforeach
                          </table>
                          </div>
                          </div>
          </div>
          </div>
          </section>
  </div>
  <!-- /.content-wrapper -->


@endsection