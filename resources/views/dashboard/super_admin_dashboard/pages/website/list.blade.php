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
                        <h4 class="text-themecolor">Website</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Website</li>
                                
                            </ol>
                            <a href="{{URL::to('admin/websites/create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title float-left">All Website</h4>
                    @include('super_admin_dashboard.layouts.partials.flash-message')
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="200px">No.</th>
                                <th width="200px">User Name</th>
                                <th width="200px">Website</th>
                                <th width="200px">Tags</th>
                                <th width="200px">Api Count</th>
                                <th width="200px">Api</th>
                                <th width="200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($websites as $key=> $website)
                                                                <tr id="10">
                                        <td><a href="javascript:void(0)">{{$key+1}}</a></td>
                                        <td>{{$website->name}}</td>
                                        <td>{{$website->website}}</td>
                                        <td>
                                        <?php 
                                       
                                        $tags = explode(',',$website->tags);
                                        foreach($tags as $tag){
                                            ?>
                                            <span class="badge badge-success ml-auto">
                                            <?php
                                            echo $tag;
                                            ?>
                                            </span>
                                            <?php
                                        }
                                        ?>
                                       </td>
                                       <td>{{$website->count}}</td>
                                        <td> 
                                            
                                        <button type="button" class="btn btn-success btn-outline "  onclick="copyApiClipbord('{{$website->id}}')">COPY API</button>    
                                        <button type="button" class="btn btn-success btn-outline "  onclick="copyCodeClipbord('{{$website->id}}')">COPY CODE</button>    
                                        
                                    </td>
        
                                         <td>
                                         <form action="{{ route('websites.destroy',$website->id) }}" method="POST">
                                         <a href="{{ route('websites.edit',$website->id) }}" class="btn btn-warning btn-circle"><i class="fa fa-pencil-alt"></i> </a>
                                         
                                   
               
                                @csrf
                                @method('DELETE')
                  
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                
                                <button type="submit" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                <a href="{{URL::to('admin/ads/website')}}/{{$website->id}}" class="btn btn-success btn-circle" title="Ads List "><i class="fa fas fa-th-large"></i> </a>
                            </form>

                                 
                                        </td>
                                    </tr>
                                    @empty
                        <tr>
                            <td><p> Website not found </p></td>
                            <td></td>
                            <td></td>
                            <td></td>
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

                @section('footer-scripts') 
                <script src="{{ asset('public/')}}/dashboard/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="{{ asset('public/')}}/dashboard/dist/js/pages/toastr.js"></script>
<script type="text/javascript">

function copyApiClipbord(website_id){


$.ajax({
type:'POST',
url:"{{ route('superadmin.website.copy.api') }}",
data:{website_id:website_id,
_token:     '{{ csrf_token() }}',
dataType: 'json',
},success:function(response){
//var text = "Example text to appear on clipboard";
navigator.clipboard.writeText(response.data).then(function() {
$.toast({
heading: response.message,
position: 'top-right',
loaderBg:'#ff6849',
icon: 'success',
hideAfter: 3500

});
// console.log('Async: Copying to clipboard was successful!');
});
},error:function(response){
    console.log(response.responseJSON);
    $.toast({
heading: response.responseJSON.message,
position: 'top-right',
loaderBg:'#ff6849',
icon: 'error',
hideAfter: 3500

});
}

});

}

</script>



<script type="text/javascript">

function copyCodeClipbord(website_id){

$.ajax({
type:'POST',
url:"{{ route('superadmin.website.copy.code') }}",
data:{website_id:website_id,
_token:     '{{ csrf_token() }}'
},success:function(response){
//var text = "Example text to appear on clipboard";
navigator.clipboard.writeText(response.data).then(function() {
$.toast({
heading: response.message,
position: 'top-right',
loaderBg:'#ff6849',
icon: 'success',
hideAfter: 3500

});
// console.log('Async: Copying to clipboard was successful!');
});
},error:function(response){
    console.log(response.responseJSON);
    $.toast({
heading: response.responseJSON.message,
position: 'top-right',
loaderBg:'#ff6849',
icon: 'error',
hideAfter: 3500

});
}
});

}
</script>
@endsection