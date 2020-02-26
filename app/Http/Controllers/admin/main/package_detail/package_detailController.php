<?php

namespace App\Http\Controllers\admin\main\package_detail;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class package_detailController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function package_detail(Request $data)
    {
         $data = $this->model->d_package_detail()->get();
        return view('admin.main.package_detail.package_detail', compact('data'));
    }
    public function package_detail_create()
    {
        return view('admin.main.package_detail.package_detail_create');
    }
    public function package_detail_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_package_detail()->max('dpd_id')+1;

            // Save
            $simpan = $this->model->d_package_detail()->create([
                'dpd_id'=>$id,
                'dpd_title'=>$req->dpd_title,
                'dpd_description'=>$req->dpd_description,
                'dpd_price_include'=>$req->dpd_price_include,
                'dpd_price_exclude'=>$req->dpd_price_exclude,
                'dpd_created_by'=>$req->dpd_created_by,
                'dpd_updated_by'=>$req->dpd_updated_by,
                'dpd_created_at'=>date('Y-m-d h:i:s'),
                'dpd_updated_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }
    public function package_detail_update()
    {
        return ('c');
    }
    public function package_detail_delete()
    {
        return ('D');
    }
    public function package_detail_datatable()
    {
        return ('e');
    }
}
