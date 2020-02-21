<?php

namespace App\model\functions;

use Illuminate\Database\Eloquent\Model;

class d_package_image extends model
{
    protected $table = 'd_package_image';
    protected $primaryKey = 'dpi_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'dpi_id',
        'dpi_package',
        'dpi_image',
    ];

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
    // public function d_shop_image()
    // {
    //     return $this->hasMany('App\model\functions\shop\d_shop_image', 'dsi_shop', 'ds_id');
    // }

}
