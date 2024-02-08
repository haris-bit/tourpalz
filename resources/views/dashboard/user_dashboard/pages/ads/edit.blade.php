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
                        <h4 class="text-themecolor">Targeted Ads</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Targeted Ads</li>
                                
                            </ol>
                            <a href="{{URL::to('ads/create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Targeted Ads</h4>
                               
                                <form class="m-t-40" action="{{ route('user.ads.update', $ads->id) }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                    @method('PATCH') 
                    <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <h5>Path <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="path" class="form-control" required value="{{$ads->path}}"> </div>
                                        
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                <div class="form-group">
                                        <h5>HTML Target ID<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="div_gpt_ad" class="form-control" required value="{{$ads->div_gpt_ad}}"> </div>
                                        
                                    </div>
                                    </div>
                                    </div>
                                    
                                    

                                    <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <!-- <h4 class="text-themecolor">Target Width And Hight</h4> -->
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            
                            <button onclick="adWidhtAndHight({{$ads->id}});" type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a>

                        </div>
                    </div>
                </div>
                                    <div class="row">
                                <div class="col-md-12">
                                    <div id="adWidhtAndHight">

                                    @forelse ($ad_width_hights as $key=> $ad_width_hight)
                                    <div class="row" id="op_{{$ad_width_hight->id}}">
        <div class="col-sm-6 nopadding">
            <div class="form-group">
                <input type="number" class="form-control" id="opName" onchange="updateWidhtUpdate({{$ad_width_hight->id}},this.value)" name="opName[]" value="{{$ad_width_hight->ad_width}}" placeholder="Width">
            </div>
        </div>
        
       
        <div class="col-sm-6 nopadding">
            <div class="form-group">
            <input type="text" class="form-control adHight" placeholder="Hight" onchange="updateHightUpdate({{$ad_width_hight->id}},this.value)"  value="{{$ad_width_hight->ad_hight}}">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button" onclick="width_hight_delete({{$ad_width_hight->id}});"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
            </div>
            </div>
                                    @endforeach
                                    </div>
    </div>
    </div>

                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info">Update</button>
                                       
                                    </div>
                                </form>
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
        <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/popper/popper.min.js"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('public/')}}/dashboard/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('public/')}}/dashboard/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('public/')}}/dashboard/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('public/')}}/dashboard/dist/js/custom.min.js"></script>

    <script src="{{ asset('public/')}}/dashboard/dist/js/pages/validation.js"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--Sky Icons JavaScript -->
    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
    }(window, document, jQuery);
    </script>




<script src="{{ asset('public/')}}/dashboard/assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/dff/dff.js" type="text/javascript"></script>
    <script type="text/javascript" src="../assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
    <script>
        $(function () {
            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            // For select 2
            $(".select2").select2();
            $('.selectpicker').selectpicker();
            //Bootstrap-TouchSpin
            $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
            $("input[name='tch1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='tch2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='tch3']").TouchSpin();
            $("input[name='tch3_22']").TouchSpin({
                initval: 40
            });
            $("input[name='tch5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            // For multiselect
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });
            $('#public-methods').multiSelect();
            $('#select-all').click(function () {
                $('#public-methods').multiSelect('select_all');
                return false;
            });
            $('#deselect-all').click(function () {
                $('#public-methods').multiSelect('deselect_all');
                return false;
            });
            $('#refresh').on('click', function () {
                $('#public-methods').multiSelect('refresh');
                return false;
            });
            $('#add-option').on('click', function () {
                $('#public-methods').multiSelect('addOption', {
                    value: 42,
                    text: 'test 42',
                    index: 0
                });
                return false;
            });
            $(".ajax").select2({
                ajax: {
                    url: "https://api.github.com/search/repositories",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;
                        return {
                            results: data.items,
                            pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                minimumInputLength: 1,
                //templateResult: formatRepo, // omitted for brevity, see the source of this page
                //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
    </script>

<script>
function width_hight_delete(ad_w_h_id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: 'POST',
           url: '{{ route('superadmin.ads.ajax.delete') }}',
           data: {
            ad_w_h_id: ad_w_h_id
           },
           success: function(res) {
             console.log(res)
             $("#op_"+ad_w_h_id).remove();
            //  $("#pOptions").append(""+ res.trim()+"");
            //  $('.optionsSelect2').tagsinput('refresh');

            // document.getElementById("pOptions").append() = res.trim(); 
           }
       });
   }
</script>


<script>
function updateWidhtUpdate(ad_w_h_id,value) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: 'POST',
           url: '{{ route('superadmin.ads.ajax.width.update') }}',
           data: {
            ad_w_h_id: ad_w_h_id,
            value: value
           },
           success: function(res) {
             console.log(res)
            // $("#op_"+ad_w_h_id).remove();
            //  $("#pOptions").append(""+ res.trim()+"");
            //  $('.optionsSelect2').tagsinput('refresh');

            // document.getElementById("pOptions").append() = res.trim(); 
           }
       });
   }
</script>


<script>
function updateHightUpdate(ad_w_h_id,value) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: 'POST',
           url: '{{ route('superadmin.ads.ajax.hight.update') }}',
           data: {
            ad_w_h_id: ad_w_h_id,
            value: value
           },
           success: function(res) {
             console.log(res)
            // $("#op_"+ad_w_h_id).remove();
            //  $("#pOptions").append(""+ res.trim()+"");
            //  $('.optionsSelect2').tagsinput('refresh');

            // document.getElementById("pOptions").append() = res.trim(); 
           }
       });
   }
</script>


<script>
  
  
let count=0;
  function adWidhtAndHight(ad_id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({
          type: 'POST',
          url: '{{ route('superadmin.ads.add.ajax') }}',
          data: {ad_id:ad_id},
          success: function(res) {
            console.log(res);
            $("#adWidhtAndHight").append(""+ res.trim()+"");
           

           // document.getElementById("pOptions").append() = res.trim(); 
          }
      });
      count++;
  }

  </script>

<script>
function width_hight_delete(ad_w_h_id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: 'POST',
           url: '{{ route('user.ads.ajax.delete') }}',
           data: {
            ad_w_h_id: ad_w_h_id
           },
           success: function(res) {
             console.log(res)
             $("#op_"+ad_w_h_id).remove();
            //  $("#pOptions").append(""+ res.trim()+"");
            //  $('.optionsSelect2').tagsinput('refresh');

            // document.getElementById("pOptions").append() = res.trim(); 
           }
       });
   }
</script>


<script>
function updateWidhtUpdate(ad_w_h_id,value) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: 'POST',
           url: '{{ route('user.ads.ajax.width.update') }}',
           data: {
            ad_w_h_id: ad_w_h_id,
            value: value
           },
           success: function(res) {
             console.log(res)
            // $("#op_"+ad_w_h_id).remove();
            //  $("#pOptions").append(""+ res.trim()+"");
            //  $('.optionsSelect2').tagsinput('refresh');

            // document.getElementById("pOptions").append() = res.trim(); 
           }
       });
   }
</script>


<script>
function updateHightUpdate(ad_w_h_id,value) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
       $.ajax({
           type: 'POST',
           url: '{{ route('user.ads.ajax.hight.update') }}',
           data: {
            ad_w_h_id: ad_w_h_id,
            value: value
           },
           success: function(res) {
             console.log(res)
            // $("#op_"+ad_w_h_id).remove();
            //  $("#pOptions").append(""+ res.trim()+"");
            //  $('.optionsSelect2').tagsinput('refresh');

            // document.getElementById("pOptions").append() = res.trim(); 
           }
       });
   }
</script>


<script>
  
  
let count=0;
  function adWidhtAndHight(ad_id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
      $.ajax({
          type: 'POST',
          url: '{{ route('user.ads.add.ajax') }}',
          data: {ad_id:ad_id},
          success: function(res) {
            console.log(res);
            $("#adWidhtAndHight").append(""+ res.trim()+"");
           

           // document.getElementById("pOptions").append() = res.trim(); 
          }
      });
      count++;
  }

  </script>
        @endsection
       