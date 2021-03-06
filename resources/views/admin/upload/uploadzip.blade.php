<!DOCTYPE html>

<html lang="en">



<head>

    @include('admin.partials.head')

</head>



<body>

    @include('admin.partials.header')

    <!-- Page container -->

    <div class="page-container">

        <!-- Page content -->

        <div class="page-content">

            @include('admin.partials.menu')

            <!-- Main content -->

            <div class="content-wrapper">

                <div class="content">

                    <!-- Page header -->

                    <div class="page-header page-header-default">

                        <div class="page-header-content">

                            <div class="page-title">

                                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Graph

                                        Files</span></h4>

                            </div>

                        </div>

                        <div class="breadcrumb-line">

                            <ul class="breadcrumb">

                                <li><a href="{{route('admin.dashboard')}}"><i class="icon-home2 position-left"></i>

                                        Home</a>

                                </li>

                                <li><a href="{{route('uploads')}}">Files</a></li>

                                <li class="active">sdad</li>

                            </ul>

                        </div>

                    </div>

                    <!-- /page header -->

                    <div class="panel panel-flat">

                        <div class="panel-body">

                            <div class="form-group">

                                <div class="text-center">

                                    @if (count($errors) > 0)

                                    <div class="alert alert-danger error-alert">

                                        @foreach ($errors->all() as $error)

                                        <span>{{ $error }}</span><br />

                                        @endforeach

                                    </div>

                                    @endif

                                </div>

                                <div class="text-center">

                                    @if (session('status'))

                                    <div class="alert alert-success error-alert">

                                        <p>{{ session('status') }}</p>

                                    </div>

                                    @endif

                                </div>

                            </div><br />

                            <legend class="text-bold">>Upload Compiled File</legend>

                            <form method="POST" action="{{route('csv.uploadfile')}}" enctype="multipart/form-data">

                                <div class="form-group">

                                    <label class="col-lg-2 control-label text-semibold">Upload Compiled File

                                    <div class="col-lg-10">

                                        <input type="file" name="csv1" class="file-input">

                                        @if(!empty($files['csv1']))

                                        @php

                                        $path = 'uploads/'.$files['csv1'];

                                        @endphp

                                        <span
                                            class="help-block"><code><a href="{{ asset($path) }}" target="_blank">{{$files['csv1']}}</code></a></span>

                                        @else

                                        <span
                                            class="help-block"><code><a href="}" target="_blank">No File Chosen</code></a></span>

                                        @endif



                                        @if (session('success_single_csv1'))

                                        <span
                                            class="help-block alert alert-success">{{ session('success_single_csv1') }}</span>

                                        @endif

                                        @if (session('errors_single_csv1'))

                                        <span class="help-block alert alert-danger">

                                            <code>{{ session('errors_single_csv1') }}</code>.</span>

                                        @endif

                                        <span class="help-block"></span>

                                    </div>

                                    {{ csrf_field() }}

                            </form>



                          

                        </div>

                    </div>

                </div>

                <!-- /main content -->

            </div>

            <!-- /page content -->

        </div>

    </div>

    <!-- /page container -->

</body>

@include('admin.partials.footer')



</html>