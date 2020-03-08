<?php

namespace App\Http\Controllers\admin\master\category_tour;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class category_tourController extends Controller
{
    protected $model;

    public function __construct(){
        $this->middleware('auth');
        $this->model = new models();
    }

    public function category_tour(Request $data)
    {
        $data = $this->model->m_category_tour()->get();
        return view('admin.master.category_tour.category_tour', compact('data'));
    }

    public function category_tour_create()
    {
        return view('admin.master.category_tour.category_tour_create');
    }

    public function category_tour_edit(Request $req)
    {
        // return $req->all();
        $data = $this->model->m_category_tour()->where('mct_id',$req->id)->get()->first();
        return view('admin.master.category_tour.category_tour_edit',compact('data'));
    }

    public function tes(Request $req){
        return $req->all();
    }

    public function category_tour_save(Request $req)
    {
    DB::beginTransaction();
        try{
            $id = $this->model->m_category_tour()->max('mct_id')+1;

            // Save
            $simpan = $this->model->m_category_tour()->create([
                'mct_id'=>$id,
                'mct_title'=>$req->mct_title,
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

    public function category_tour_update(Request $req)
    {
        DB::beginTransaction();
        try {
            $simpan = $this->model->m_category_tour()->where('mct_id',$req->id)->update([
                'mct_title'=>$req->mct_title
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        } catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['status'=>'gagal','problem'=>$e]);
            // something went wrong
        }
    }

    public function category_tour_delete(Request $req)
    {
        DB::beginTransaction();
        try {
            $delete = $this->model->m_category_tour()->where('mct_id',$req->id)->delete();
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        }catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['status'=>'gagal','problem'=>$e]);
        }
    }

    public function category_tour_datatable()
    {
        return ('e');
    }

}
