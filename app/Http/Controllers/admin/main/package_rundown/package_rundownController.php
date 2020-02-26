<?php

namespace App\Http\Controllers\admin\main\package_rundown;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class package_rundownController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function package_rundown(Request $data)
    {
         $data = $this->model->d_package_rundown()->get();
        return view('admin.main.package_rundown.package_rundown', compact('data'));
    }
    public function package_rundown_create()
    {
        return view('admin.main.package_rundown.package_rundown_create');
    }
    public function package_rundown_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->d_package_rundown()->max('dpr_id')+1;

            // Save
            $simpan = $this->model->d_package_rundown()->create([
                'dpr_id'=>$id,
                'dpr_package'=>$req->dpr_package,
                'dpr_day'=>$req->dpr_day,
                'created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            // return $req->all();
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }
    public function package_rundown_update()
    {
        return ('c');
    }
    public function package_rundown_delete()
    {
        return ('D');
    }
    public function package_rundown_datatable()
    {
        return ('e');
    }
}
