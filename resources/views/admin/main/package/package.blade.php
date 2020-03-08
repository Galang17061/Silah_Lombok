@extends('layouts_admin._main')

@section('content')

<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">Main package</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Main</a></li>
                            <li class="breadcrumb-item active">Main package</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-light btn-rounded dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                    <a class="dropdown-item" href="{{ route('package_create') }}"><i class="fas fa-plus"></i>   Create</a>
                                </div>
                            </div>
                        </div>
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

                                {{-- <h4 class="header-title">Main package</h4> --}}
                                {{-- <p class="card-title-desc">DataTables has most features enabled by
                                    default, so all you need to do to use it with your own tables is to call
                                    the construction function: <code>$().DataTable();</code>.
                                </p> --}}

                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>packagename</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        {{-- @foreach($data as $index => $element)
                                        <tr>
                                            <td>{{$index+1}}</td>
                                            <td>
                                                {{$element->name}}
                                            </td>
                                            <td>
                                                {{$element->packagename}}
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning" onclick="edit({{ $element->id }})"> Edit</button>
                                                <button class="btn btn-sm btn-danger" onclick="deleted({{ $element->id }})"> Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach --}}

                                    </tbody>
                                </table>

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
<script type="text/javascript">
    var table = $('#datatable').dataTable();
    function edit(argument) {
        window.location.href = baseUrl+'/main/package/edit?&id='+argument;
    }
    function deleted(argument) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete!'
        }).then((result) => {
            $.ajax({
                type: "get",
                url:"{{ route('package_delete') }}",
                data: {'id':argument},
                success:function(data){
                    if (data.status == 'sukses') {
                        if (result.value) {Swal.fire('Deleted!','Your file has been Deleted.','success')}
                            location.reload();
                    }else if(data.status == 'gagal'){
                        if (result.value) {Swal.fire('Fail!','your file could not be Deleted','error')}
                    }
                }
            });
            
        })
    }
</script>
@endsection
