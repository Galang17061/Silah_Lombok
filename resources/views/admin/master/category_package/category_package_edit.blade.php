@extends('layouts_admin._main')

@section('content')

<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">FORM Create Category Package</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Master User</a></li>
                            <li class="breadcrumb-item active">Create Master User</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form_save">
                                    @foreach($data as $index => $element)
                                <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">
                                    Nama
                                </label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="mcp_title" value="{{$element->mcp_title}}"
                                            id="example-text-input">
                                    </div>
                                </div>
                                <div class="mt-4">
                                <a href="{{route('tes')}}">
                                        <button class="btn btn-primary waves-effect waves-light" type="button" onclick="update()">Update</button>
                                    </a>
                                    
                                </div>
                                
                                @endforeach
                                
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end page-content-wrapper -->
    </div>
    <!-- End Page-content -->

</div>

@endsection

@section('extra_script')
<script>
  $('.dropify').dropify();

 
</script>
@endsection
