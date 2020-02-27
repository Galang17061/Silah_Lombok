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
        return view('admin.main.package.package');
    }
    public function package_create ()
    {
        
        return view('admin.main.package.package_create');
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

            $package_header = $this->model->d_package()->where('dp_id',3)->update([
                                    'dp_id'=>$id,
                                    'dp_title'=>$req->title,
                                    'dp_description'=>$req->description,
                                    'dp_price_include'=>$req->price_include,
                                    'dp_price_exclude'=>$req->price_exclude,
                              ]);

            for ($i=0; $i <count($req->day) ; $i++) { 
                $activity[$i] = $req->input('activity_'."$i".'.*');
            }
            for ($i=0; $i <count($req->file('image')) ; $i++) { 
                $photo = 'package/package_image_'.$id.'_'.$i.'_'.'.jpg';
                // Storage::put($photo,file_get_contents($req->file('image')[$i]));
            }
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        } catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
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
