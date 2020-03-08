@extends('layouts_admin._main')

@section('content')

<div class="main-content">

    <div class="page-content">

        <!-- Page-Title -->
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="page-title mb-1">FORM Create Main Package</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Main</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Main Package</a></li>
                            <li class="breadcrumb-item active">Create Main Package</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <div class="float-right d-none d-md-block">
                            <button type="button" onclick="save()" class="btn btn-sm btn-success"><i class="fa fa-save"></i> &nbsp;Save</button>
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
                              <form class="form_save">
                                <h4 class="header-title">FORM CREATE</h4>
                                <p class="card-title-desc">Package .</p>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified nav-tabs-custom" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#main_data" role="tab" aria-selected="false">
                                            <i class="fas fa-th-large mr-1"></i> <span class="d-none d-md-inline-block">Main Data</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#rundown" role="tab" aria-selected="false">
                                            <i class="fas fa-list-ul mr-1 align-middle"></i> <span class="d-none d-md-inline-block">Rundown</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#images" role="tab" aria-selected="true">
                                            <i class="far fa-images mr-1 align-middle"></i> <span class="d-none d-md-inline-block">Images</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#price_table" role="tab" aria-selected="false">
                                            <i class="fas fa-dollar-sign mr-1 align-middle"></i> <span class="d-none d-md-inline-block">Price</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3">
                                    {{-- TAB KE 1 --}}
                                    <div class="tab-pane " id="main_data" role="tabpanel">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Title</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="title" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Category</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="category">
                                                    <option>- Chose Category -</option>
                                                    @foreach ($category as $element)
                                                        <option value="{{ $element->mcp_id }}">{{ $element->mcp_title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Price Include</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="price_include" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Price Exclude</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="price_exclude" value="">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- TAB KE 2 --}}
                                    <div class="tab-pane " id="rundown" role="tabpanel">
                                       <button type="button" onclick="add_day()" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> &nbsp;Add Day</button>
                                       <div class="drop_day">
                                           
                                       </div>
                                    </div>
                                    {{-- TAB KE 3 --}}
                                    <div class="tab-pane " id="images" role="tabpanel">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Image 1</label>
                                            <div class="col-md-10">
                                                <input type="file" class="dropify image" name="image[]"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Image 2</label>
                                            <div class="col-md-10">
                                                <input type="file" class="dropify image" name="image[]"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Image 3</label>
                                            <div class="col-md-10">
                                                <input type="file" class="dropify image" name="image[]"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Image 4</label>
                                            <div class="col-md-10">
                                                <input type="file" class="dropify image" name="image[]"/>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- TAB KE 4 --}}
                                    <div class="tab-pane active" id="price_table" role="tabpanel">
                                       <button type="button" onclick="add_hotel()" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> &nbsp;Add Hotel</button>
                                       <button type="button" onclick="add_person()" class="btn btn-sm btn-warning"><i class="fa fa-plus"></i> &nbsp;Add Person</button>
                                       <div style="margin-top: 30px;" class="drop_person col-sm-offset-1 row col-md-12 form-inline">
                                           
                                       </div>
                                       <div style="margin-top: 30px" class="drop_hotel col-md-12">
                                           
                                       </div>
                                    </div>
                                </div>
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

   function save(argument) {
        var form   = $('.form_save');
        formdata = new FormData(form[0]);
        $.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Save!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url:"{{ route('package_save') }}",
                    data: formdata ? formdata : form.serialize(),
                    processData: false,
                    contentType: false,
                    success:function(data){
                        if (data.status == 'sukses') {
                            Swal.fire('Saved!','Your file has been Saved.','success')
                        }else if(data.status == 'gagal'){
                            Swal.fire('Fail!','your file could not be saved','error')
                        }else if(data.status == 'username_terpakai'){
                            Swal.fire('Fail!','Username Already Taken. Try Another','warning')
                        }
                    }
                });
            }
        })
    }
    function add_day() {
      var index = $('.day').length+1;
      var index_value = $('.day').length;
      $('.drop_day').append(
        "<div class='day day_"+index+"'>"+
            "<div class='form-group row'>"+
               "<h3 class='col-md-2 col-form-label day_text day_text_"+index+"'>Day "+index+"</h3>"+
               '<input type="hidden" class="form-control day_value" name="day[]" value="'+index_value+'">'+
                "<div class='col-md-10'>"+
                    "<button class='btn btn-sm btn-danger' type='button' onclick='remove_day(\"" + index + "\")'><i class='fa fa-trash'></i> Remove </button>"+
                    "<button class='btn btn-sm btn-info' type='button' style='margin-left: 20px;' onclick='add_activity(\"" + index_value + "\")'><i class='fa fa-plus'></i> Activity </button>"+
                "</div>"+
                "<div class='col-md-12 form-inline'>"+
                    "<div class='col-md-4 drop_activity_"+index_value+"'>"+
                    "</div>"+
                "</div>"+
            "</div>"+
        "</div>"
      );
    }
    function add_activity(argument) {
      var activity_total = $('.activity').length+1;
      $('.drop_activity_'+argument).append('<input type="text" style="margin-bottom:10px" class="form-control activity_remove_'+activity_total+' activity activity_'+argument+'" name="activity_'+argument+'[]" value="'+activity_total+'"><button class="btn btn-sm btn-danger activity_remove_'+activity_total+'" style="margin-bottom:10px" type="button" onclick="remove_activity(\'' + activity_total + '\')"><i class="fas fa-times"></i>  </button>');
    }
    function order_day() {
      var day_total = $('.day').length+1;
      $('.day_text').each(function(index){
        $(this).text('Day '+(index+1));
      });
      $('.day_value').each(function(index){
        $(this).val((index));
      });
    }

    function remove_day(argument) {
        $('.day_'+argument).remove();
        order_day();
    }
    function remove_activity(argument) {
        $('.activity_remove_'+argument).remove();
    }
    function remove_person(argument) {
        $('.person_remove_'+argument).remove();
        // order_person();
    }
    function add_person(argument) {
      var index = $('.person').length+1;
      var index_value = $('.person').length;
      if (index_value == 5) {
        Swal.fire('Warning!','telah Mencapa data maximal.','warning')
      }else{
        $('.drop_person').append(
            '<input type="hidden" class="form-control person_value person_remove_'+index_value+'" name="person[]" value="'+index_value+'">'+
            '<input type="text" style="margin-bottom:10px;margin-left: 5px" class="col-md-2  form-control person person_remove_'+index_value+' person person_'+index_value+'" placeholder="person range '+index+'" name="person_'+index_value+'[]">'+
            '<button class="btn btn-sm btn-danger person_remove_'+index_value+'" style="margin-bottom:10px;margin-left: 5px;" type="button" onclick="remove_person(\'' + index_value + '\')"><i class="fas fa-times"></i>  </button>'

        );
      }
      console.log(index_value);
      console.log(index);
    }
    function order_person() {
      var day_total = $('.person').length+1;
      $('.person_value').each(function(index){
        $(this).val((index));
      });
    }
    function add_hotel(argument) {
      var index = $('.hotel').length+1;
      var index_value = $('.hotel').length;
      var total_person = $('.person').length;

      // console.log(index);
      // console.log(index_value);
      var hotel_price = [];
      for (var i = 0; i < total_person; i++) {
          hotel_price += 
          '<div class="drop_here_hotel_price_'+index_value+' col-sm-2">'+
                '<input type="text" style="margin-bottom:10px" class=" form-control hotel_price hotel_price_remove_'+index_value+' hotel_price_remove_'+index_value+'_'+i+' hotel_price_'+index_value+' hotel_price_'+index_value+'_'+i+'" placeholder="Harga ke '+index+'" name="hotel_price_'+index_value+'[]">'+
          '</div>';
      }
      // console.log(hotel_price);
        $('.drop_hotel').append(
            '<div class="form-group row">'+
                    '<div class="col-sm-2">'+
                        '<select style="margin-bottom:10px" class="form-control hotel hotel_remove_'+index_value+' hotel_'+index_value+'" placeholder="Hotel ke '+index+'" name="hotel_'+index_value+'[]">'+
                            '<option>- Pilih Hotel -</option>'+
                        '</select>'+
                    '</div>'+
                    hotel_price+
            '</div>');
    }

</script>
@endsection
