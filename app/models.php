<?php

namespace App;

use App\model\functions\d_package;
use App\model\functions\d_package_image;
use App\model\functions\d_package_rundown;
use App\model\functions\d_package_rundown_detail;
use App\model\master\m_category_package;
use App\model\master\m_category_tour;
use App\model\master\m_slider;
use App\User;
use Illuminate\Database\Eloquent\Model;

class models extends model
{
    public function User()
    {
        $User = new User();
        return $User;
    }

    public function d_package()
    {
        $d_package = new d_package;
        return $d_package;
    }

    public function d_package_image()
    {
        $d_package_image = new d_package_image;
        return $d_package_image;
    }

    public function d_package_rundown()
    {
        $d_package_rundown = new d_package_rundown;
        return $d_package_rundown;
    }

    public function d_package_rundown_detail()
    {
        $d_package_rundown_detail = new d_package_rundown_detail;
        return $d_package_rundown_detail;
    }

    public function m_category_package()
    {
        $m_category_package = new m_category_package;
        return $m_category_package;
    }

    public function m_category_tour()
    {
        $m_category_tour = new m_category_tour;
        return $m_category_tour;
    }

    // public function m_contact()
    // {
    //     $m_contact = new m_contact;
    //     return $m_contact;
    // }

    public function m_slider()
    {
        $m_slider = new m_slider;
        return $m_slider;
    }

}
