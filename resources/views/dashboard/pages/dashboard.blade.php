@extends('dashboard.layouts.master')

@section('content')
<!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">

                @forelse ($stats as $key=> $role)

                <!-- Column -->
                <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{$role->lable}}</h5>
                                <div class="d-flex no-block align-items-center m-t-20">
                                    <div class="ml-auto">
                                        <h1> {{$role->value}}</h1></div>
                                </div>
                            </div>
                        </div>
                    </div>
                                                               
                                           
                             
                                    @empty
                       
                        @endforelse
                    
                  
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                 
              
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
                @endsection
                @section('footer-scripts') 
 <!--morris JavaScript -->
 <script src="{{ asset('public/')}}/dashboard/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Chart JS -->
    <script src="{{ asset('public/')}}/dashboard/dist/js/dashboard4.js"></script>
                @endsection