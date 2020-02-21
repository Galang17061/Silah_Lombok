<?php

namespace App\Http\Controllers\admin\master\category_package;

use App\models;
use App\Http\Controllers\Controller;

class category_packageController extends Controller
{
    protected $model;

    public function main_package_detail(Request $data)
    {
        return view('admin.main.package_detail.package_detail', compact('data'));
    }
    public function main_package_detail_save()
    {
        return ('b');
    }
    public function main_package_detail_update()
    {
        return ('c');
    }
    public function main_package_detail_delete()
    {
        return ('D');
    }
    public function main_package_detail_datatable()
    {
        return ('e');
    }
}