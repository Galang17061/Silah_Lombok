<?php

namespace App\Http\Controllers\admin\main\package_rundown_detail;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use DB;

class package_rundown_detailController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function package_rundown_detail(Request $data)
    {
        $data = $this->model->d_package_rundown_detail()->get();
        return view('admin.main.package_rundown_detail.package_rundown_detail', compact('data'));
    }

    public function package_rundown_detail_create(){
        return view('admin.main.package_rundown_detail.package_rundown_detail_create');
    }

    public function package_rundown_detail_save()
    {
        DB::beginTransaction();
        try{
            $id = $this->model->d_package_image_rundown_detail()->max('dprd_id')+1;
            $simpan = $this->model->d_package_image_rundown_detail()->create([
                'dprd_id'=>$id,
                'dprd_dt'=>$req->dprd_dt,
                'dprd_package'=>$req->dprd_package,
                'dprd_schedule'=>$req->dprd_schedule,
            ]);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'sukses']);
        }
    }
    public function package_rundown_detail_update()
    {
        return ('c');
    }
    public function package_rundown_detail_delete()
    {
        return ('D');
    }
    public function package_rundown_detail_datatable()
    {
        return ('e');
    }
}
