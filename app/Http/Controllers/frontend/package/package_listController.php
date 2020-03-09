<?php

namespace App\Http\Controllers\frontend\package;

use App\Http\Controllers\Controller;
use App\models;
class package_listController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->model = new models();
    }

    public function package_list(){
        $data = $this->model->d_package()->with('d_package_image')->get();
        return view('frontend.package_list.package_list',compact('data'));
    }
}
