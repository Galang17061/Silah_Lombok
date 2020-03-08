<?php

namespace App\Http\Controllers\admin\master\category_package;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_packageController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_package()
    {
         $data = $this->model->m_category_package()->get();
        return view('admin.master.category_package.category_package', compact('data'));
    }

    public function category_package_create()
    {
        return view('admin.master.category_package.category_package_create');
    }

    public function category_package_edit(Request $req)
    {
        // return $req->all();
        return $data = $this->model->m_category_package()->where('mcp_id',$req->id)->with('d_package')->get()->first();
        return view('admin.master.category_package.category_package_edit',compact('data'));
    }

    public function category_package_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try{
            $id = $this->model->m_category_package()->max('mcp_id')+1;

            // Save
            $simpan = $this->model->m_category_package()->create([
                'mcp_id'=>$id,
                'mcp_title'=>$req->mcp_title,
                'created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
        }
    }

    public function category_package_update(Request $req)
    {
        DB::beginTransaction();
        try{
            $simpan = $this->model->m_category_package()->where('mcp_id',$req->id)->update([
                'mcp_title'=>$req->mcp_title,
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }
        catch(\Exception $e){
            DB::rollback();
            return Response()->json(['status'=>'gagal','problem'=>$e]);
        }
    }

    public function category_package_delete(Request $req)
    {
       DB::beginTransaction();
        try {
            $delete = $this->model->m_category_package()->where('mcp_id',$req->id)->delete();
            // DB::statement("ALTER TABLE table_name AUTO_INCREMENT = 1");
            // $max = DB::table('m_category_package')->max('mcp_id') + 1; 
            DB::statement("ALTER TABLE m_category_package AUTO_INCREMENT = 1");\
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['status'=>'gagal','problem'=>$e]);
        }
    }
    public function category_package_datatable()
    {
        return ('e');
    }
}
