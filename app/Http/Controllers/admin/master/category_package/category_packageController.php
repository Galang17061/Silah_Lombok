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

    // public function test($param){
    //     return $this->model->m_category_package()->get()->where('mcp_id',$param);

    // }

    

    public function category_package(Request $data)
    {
         $data = $this->model->m_category_package()->get();
        return view('admin.master.category_package.category_package', compact('data'));
    }
    public function category_package_create()
    {
        return view('admin.master.category_package.category_package_create');
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

    public function category_package_edit($id){
        // Ojok Dirubah!
        $data = $this->model->m_category_package()->get()->where('mcp_id',$id);
        return view('admin.master.category_package.category_package_edit',compact('data'));
    }

    public function category_package_update(Request $req)
    {
        $simpan = $this->model->m_category_package()->where('mcp_id',$req->mcp_id)->update([
            'mcp_title'=>$req->mcp_title
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    
    public function tes(Request $req){
        return $req->mcp_id;
    }

    public function category_package_delete($id)
    {
        // $data = $this->model->m_category_package()->get()->where('mcp_id',$id);
        // $update = $data = $this->model->m_category_package()->get()->where('mcp_id',$id)->update([
        //     'mcp_title'=>$id->mcp_title
        // ]);
    }
    public function category_package_datatable()
    {
        return ('e');
    }
}
