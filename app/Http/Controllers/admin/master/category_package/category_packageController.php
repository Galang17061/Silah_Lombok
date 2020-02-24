<?php

namespace App\Http\Controllers\admin\master\category_package;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class category_packageController extends Controller
{
    protected $model;

    public function category_package(Request $data)
    {
        return view('admin.master.category_package.category_package', compact('data'));
    }
    // public function category_package_create(Request $data)
    // {
    //     return view('admin.category_package.category_package', compact('data'));
    // }
    public function category_package_save()
    {
        return ('b');
    }
    public function category_package_update()
    {
        return ('c');
    }
    public function category_package_delete()
    {
        return ('D');
    }
    public function category_package_datatable()
    {
        return ('e');
    }
}