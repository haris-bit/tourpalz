@extends('super_admin_dashboard.layouts.master')

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
                        <h4 class="text-themecolor">{{$website->website}} Targeted Ads</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">{{$website->website}} Targeted Ads</li>
                                
                            </ol>
                            <a href="{{URL::to('admin/ads/website/create/')}}/{{$website->id}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title float-left">All {{$website->website}} Targeted Ads</h4>
                    @include('super_admin_dashboard.layouts.partials.flash-message')
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="200px">No.</th>
                                <th width="200px">Path</th>
                                <th width="200px">HTML Target ID</th>
                                <th width="200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($ads as $key=> $ad)
                                                                <tr id="10">
                                        <td><a href="javascript:void(0)">{{$key+1}}</a></td>
                                       
                                        <td>
                                            {{$ad->path}}
                                         </td>
                                         <td>
                                            {{$ad->div_gpt_ad}}
                                         </td>
                                       
        
                                         <td>
                                         <form action="{{ route('ads.destroy',$ad->id) }}" method="POST">
                                         <a href="{{ route('ads.edit',$ad->id) }}" class="btn btn-warning btn-circle"><i class="fa fa-pencil-alt"></i> </a>
                                   
               
                                @csrf
                                @method('DELETE')
                  
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                
                                <button type="submit" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                            </form>

                                 
                                        </td>
                                    </tr>
                                    @empty
                        <tr>
                            <td><p> Ads not found </p></td>
                            <td></td>
                            
                            <td></td>
                            <td></td>
                        </tr>
                        @endforelse


                                                                       


                                                                </tbody>
                        </table>
                    </div>
                </div>
            </div>



                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            @endsection