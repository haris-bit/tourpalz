@extends('user_dashboard.layouts.master')

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
                            <a href="{{URL::to('websites/create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title float-left">All Website</h4>

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th width="200px">No.</th>
                                <th width="200px">Website</th>
                                <th width="200px">Api</th>
                                <th width="200px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($websites as $key=> $website)
                                                                <tr id="10">
                                        <td><a href="javascript:void(0)">{{$key+1}}</a></td>
                                        <td>{{$website->website}}</td>
                                       
                                        <td> 
                                            
                                        <button type="button" class="btn btn-success btn-outline "  onclick="copyClipbord('{{ asset('public/api-code-js/')}}/{{$website->file}}')">COPY API</button>    
                                        
                                    </td>
        
                                         <td>
                                         <form action="{{ route('websites.destroy',$website->id) }}" method="POST">
                                         <a href="{{ route('websites.edit',$website->id) }}" class="btn btn-warning btn-circle"><i class="fa fa-pencil-alt"></i> </a>
                                         
                                   
               
                                @csrf
                                @method('DELETE')
                  
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                
                                <button type="submit" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
                                <a href="{{URL::to('ads/website')}}/{{$website->id}}" class="btn btn-success btn-circle" title="Ads List "><i class="fa fas fa-th-large"></i> </a>
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

                <script type="text/javascript">
   
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
   
    function copyClipbord(text){
  
      //  e.preventDefault();
   
        
   
        $.ajax({
           type:'POST',
           url:"{{ route('website.copy') }}",
           data:{path:text,
            _token:     '{{ csrf_token() }}'
        },
           success:function(data){
             //var text = "Example text to appear on clipboard";
navigator.clipboard.writeText(data).then(function() {
    $.toast({
            heading: 'Api Copy Successfully',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500
            
          });
   // console.log('Async: Copying to clipboard was successful!');
}, function(err) {
  console.error('Async: Could not copy text: ', err);
});
           }
        });
  
    }
</script>
                @endsection


