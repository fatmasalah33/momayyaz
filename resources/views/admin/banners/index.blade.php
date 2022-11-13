@extends('admin.layout')
@section('main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Banners </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('dashboard')}}" >Home</a></li>
              <li class="breadcrumb-item active">Banners </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">

          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                 
                  <p class="card-text">
                    <form class=" "  method="POST" action="{{url('dashboard/banners/store')}}"  enctype="multipart/form-data">
                        @csrf
                   
                       <div class="row">
                         <div class="col-sm-6">
                          <h5 class="card-title">slide one now </h5>
                          <img src="{{ asset("web/img/$banner->slide_1")}}" class=" w-100" alt="...">
                         </div>
                         <div class="col-sm-6">
                          <h5 class="card-title"><br>change it .<br>
                            Select the image, then click Add
                          </h5>
                          <div class=" input-group d-flex flex-column">
                            <input class="form-control mb-1 mt-3 w-100" type="file" placeholder="Image" name="slide_1">
                        </div>
                        </div>
                    
                      

                       </div>
                       <hr>
                       <div class="row">
                        <div class="col-sm-6">
                         <h5 class="card-title">slide two now </h5>
                         <img src="{{ asset("web/img/$banner->slide_2")}}" class=" w-100" alt="...">
                        </div>
                        <div class="col-sm-6">
                          <h5 class="card-title"><br>change it .<br>
                            Select the image, then click Add
                          </h5>
                         <div class="input-group d-flex flex-column">
                          <input class="form-control mb-1 mt-3 w-100" type="file" placeholder="Image" name="slide_2">
                         </div>
                       </div>
                   
                     

                      </div>
                     <hr>
                     <div class="row">
                      <div class="col-sm-6">
                       <h5 class="card-title">slide three now </h5>
                       <img src="{{ asset("web/img/$banner->slide_3")}}" class=" w-100" alt="...">
                      </div>
                      <div class="col-sm-6">
                        <h5 class="card-title"><br>change it .<br>
                          Select the image, then click Add
                        </h5>
                       <div class="input-group d-flex flex-column">
                        <input class="form-control mb-1 mt-3 w-100" type="file" placeholder="Image" name="slide_3">
                       </div>
                     </div>
                 
                   

                    </div>
                   <hr>
               
                        
                        <div class="mt-2 d-inline-block me-3">
                    
                            <button class="btn btn-info ps-4 pe-4 pt-1 pb-1 " type="submit">Add </button>
                        </div>
                
                   </form>
                  </p>
                 
                </div>
              </div>
            </div>
          
      </section>
  </div>
  <!-- /.content-wrapper -->


@endsection