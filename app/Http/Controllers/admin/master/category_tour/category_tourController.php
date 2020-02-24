<?php

namespace App\Http\Controllers\admin\master\category_tour;

use App\models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class category_tourController extends Controller
{
    protected $model;

    public function category_tour(Request $data)
    {
        return view('admin.master.category_tour.category_tour', compact('data'));
    }
    public function category_tour_create(Request $data)
    {
        // return view('admin.category_tour.category_tour', compact('data'));
    }
    public function category_tour_save()
    {
        return ('b');
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