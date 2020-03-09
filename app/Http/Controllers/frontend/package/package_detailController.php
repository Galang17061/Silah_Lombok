<?php

namespace App\Http\Controllers\frontend\package;

use App\Http\Controllers\Controller;
use App\models;
use Illuminate\Http\Request;
class package_detailController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->model = new models();
    }

    public function package_detail(Request $req){
        $data = $this->model->d_package()->with('d_package_image')->where('dp_id',$req->id)->get()->first();
        return view('frontend.package_detail.package_detail',compact('data'));
    }
}
