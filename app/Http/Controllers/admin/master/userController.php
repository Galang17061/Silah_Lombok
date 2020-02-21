<?php

namespace App\Http\Controllers\admin\master;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
use Storage;
use DB;
class UserController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function user()
    {
        $data = $this->model->User()->get();
        return view('admin.master.user.user', compact('data'));
    }
    public function user_create()
    {
        return view('admin.master.user.user_create');
    }
    public function user_save(Request $req)
    {
        DB::beginTransaction();
        try {
            $cek_username   = $this->model->User()->where('username',$req->username)->count();
            if ($cek_username > 0) {
                return Response()->json(['status'=>'username_terpakai']);
            }
            $id   = $this->model->User()->max('id')+1;
            $file = $req->file('image');
            if ($file != null) {
                $photo = 'user/user_image_'.$id.'.jpg';
                Storage::put($photo,file_get_contents($req->file('image')));
            }else{
                $photo = null;
            }
            $simpan = $this->model->User()->create([
                'id'=>$id,
                'username'=>$req->username,
                'email'=>$req->email,
                'name'=>$req->name,
                'image'=>$photo,
                'password'=>sha1(md5('لا إله إلاّ الله') . $req->password),
                'created_at'=>date('Y-m-d h:i:s'),
            ]);
            DB::commit();
            return Response()->json(['status'=>'sukses']);
        } catch (\Exception $e) {
            DB::rollback();
            return Response()->json(['status'=>'gagal']);
            // something went wrong
        }
    }
    public function user_edit()
    {

    }
    public function user_update()
    {

    }
    public function user_delete()
    {

    }
    public function user_datatable()
    {

    }
}
