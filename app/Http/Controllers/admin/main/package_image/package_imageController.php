<?php

namespace App\Http\Controllers\admin\main\package_image;

use App\Http\Controllers\Controller;
use App\models;

class package_imageController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function package_image(Request $data)
    {
        return view('admin.main.package_image.package_image', compact('data'));
    }
    public function package_image_save()
    {
        return ('b');
    }
    public function package_image_update()
    {
        return ('c');
    }
    public function package_image_delete()
    {
        return ('D');
    }
    public function package_image_datatable()
    {
        return ('e');
    }
}
