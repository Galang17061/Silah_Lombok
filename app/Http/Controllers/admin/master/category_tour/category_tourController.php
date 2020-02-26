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
    public function category_tour_update()
    {
        return ('c');
    }
    public function category_tour_delete()
    {
        return ('D');
    }
    public function category_tour_datatable()
    {
        return ('e');
    }
}
