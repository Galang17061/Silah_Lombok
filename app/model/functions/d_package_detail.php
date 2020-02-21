<?php

namespace App\model\functions;

use Illuminate\Database\Eloquent\Model;

class d_package_detail extends model
{
    protected $table = 'd_package_detail';
    protected $primaryKey = 'dpd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'dpd_id',
        'dpd_title',
        'dpd_description',
        'dpd_price_include',
        'dpd_price_exclude',
        'dpd_created_by',
        'dpd_created_at',
        'dpd_updated_at',
        'dpd_updated_by',
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
