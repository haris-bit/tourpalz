@extends('dashboard.layouts.master')
<link rel="stylesheet" href="{{ asset('public/')}}/slim/slim.min.css">
<link rel="stylesheet" href="{{ asset('public/')}}/dashboard/assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />


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
                        <h4 class="text-themecolor">Edit Blog</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Edit Blog</li>
                                
                            </ol>
                            <!-- <a href="{{URL::to('users/create')}}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</a> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Blog</h4>
                                @include('dashboard.layouts.partials.flash-message')


                                <form class="m-t-40" novalidate action="{{ route('admin.blogs.update', $blogs->id) }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                    @method('PATCH')   
                                <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                        <h5>Title <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="title" class="form-control" required value="{{$blogs->title}}">
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                <div class="form-group">
                                        <h5>Tags <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <div class="tags-default">
                                    <input type="text" value="{{$blogs->tags}}" name="tags" data-role="tagsinput" placeholder="Add Tags" /> 
                                
                                </div>                                            <span class="text-danger">{{ $errors->first('tags') }}</span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-12">
                                <div class="form-group">
                                        <h5>Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                        <textarea id="mymce" name="description">{{$blogs->description}}</textarea>

                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-md-12">
                                <div class="p-20 form-group">
                            <label for="input-file-now">Image</label>
                            <div class="slim" data-ratio="1200,677" data-min-size="1200,677" data-force-size="1200,677"
                                 data-force-min-size="false"

                                 data-size="1200,677">
                                 @if(isset($blogs->image))
                                        <img src="{{URL::to( 'public/blog_image/'.$blogs->image)}}" alt="" />
                                        @else
                                        <img src="{{URL::to('public/blog_image/placeholder-512x512.png')}}" alt="" />
                                        @endif
                                        
                                      

                                        <input name="image" type="file" id="input-file-now" class="" />
                            </div>

                            <code>
                               
                            </code>
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
         <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('public/')}}/dashboard/assets/node_modules/tinymce/tinymce.min.js"></script>
    <script>
     $(document).ready(function() {

if ($("#mymce").length > 0) {
    tinymce.init({
        selector: "textarea#mymce",
        theme: "modern",
        height: 300,
        plugins: [
            "advlist autolink  lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons",

    });
}
});
    </script>
    
        <script src="{{ asset('public/')}}/slim/slim.kickstart.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }
                
            });
        });
    </script>

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
    <script type="text/javascript" src="{{ asset('public/')}}/dashboard/assets/node_modules/multiselect/js/jquery.multi-select.js"></script>
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

@endsection