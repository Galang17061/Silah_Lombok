<?php

namespace App\Http\Controllers\admin\main\package;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use DB;
use Storage;
class packageController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function package()
    {
        $data = $this->model->d_package()->with(['m_category_package'])->get();
        return view('admin.main.package.package',compact('data'));
    }
    public function package_create ()
    {
        $category = $this->model->m_category_package()->get();
        return view('admin.main.package.package_create',compact('category'));
    }
    public function package_edit ()
    {
        # code...
    }
    public function package_save(Request $req)
    {
        // return $req->all();
        DB::beginTransaction();
        try {
            $id = $this->model->d_package()->max('dp_id')+1;

            $package_header = $this->model->d_package()->create([
                                    'dp_id'=>$id,
                                    'dp_title'=>$req->title,
                                    'dp_category'=>$req->category,
                                    'dp_description'=>$req->description,
                                    'dp_price_include'=>$req->price_include,
                                    'dp_price_exclude'=>$req->price_exclude,
                              ]);

            for ($i=0; $i <count($req->day) ; $i++) { 
                $activity = $req->input('activity_'."$i".'.*');
                $id_rundown = $this->model->d_package_rundown()->max('dpr_id')+1;
                $package_rundown = $this->model->d_package_rundown()->create([
                                    'dpr_id'=>$id_rundown,
                                    'dpr_package'=>$id,
                                    'dpr_day'=>$i+1,
                              ]);
                for ($i1=0; $i1 <count($activity) ; $i1++) { 
                    $package_rundown = $this->model->d_package_rundown_detail()->create([
                                    'dprd_id'=>$id_rundown,
                                    'dprd_package'=>$id,
                                    'dprd_schedulle'=>$activity[$i1],
                              ]);
                }
            }
            // return $activity;
            for ($i=0; $i <count($req->file('image')) ; $i++) { 
                $photo = 'package/package_image_'.$id.'_'.$i.'_'.'.jpg';
                $package_rundown = $this->model->d_package_image()->create([
                                    'dpi_package'=>$id,
                                    'dpi_image'=>$photo,
                              ]);
                // Storage::put($photo,file_get_contents($req->file('image')[$i]));
            }

            DB::commit();
            // return Response()->json(['status'=>'sukses']);
        } catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['status'=>'gagal','Exception'=>$e]);
            // something went wrong
        }
        // return $activity;
        // return $images;
    }
    public function package_update()
    {
        return ('c');
    }
    public function package_delete()
    {
        return ('D');
    }
    public function package_datatable()
    {
        return ('e');
    }
}
