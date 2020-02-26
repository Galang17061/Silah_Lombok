<?php

namespace App\Http\Controllers\admin\main\package_image;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use DB;

class package_imageController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function package_image(Request $data)
    {
        $data = $this->model->d_package_image()->get();
        return view('admin.main.package_image.package_image', compact('data'));
    }

    public function package_image_create(){
        return view('admin.main.package_image.package_image_create');
    }

    public function package_image_save(Request $req)
    {
        DB::beginTransaction();
        try{
            $id = $this->model->d_package_image()->max('dpi_id')+1;
            $simpan = $this->model->d_package_image()->create([
                'dpi_id'=>$id,
                'dpi_package'=>$req->dpi_package,
                'dpi_image'=>$req->dpi_image
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Execption $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }
    public function package_image_update()
    {
        return ('c');
    }
    public function package_image_delete()
    {
        return ('D');
    }
    public function package_image_datatable()
    {
        return ('e');
    }
}
