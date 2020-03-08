<?php

namespace App\model\functions;

use Illuminate\Database\Eloquent\Model;

class d_package_rundown_detail extends model
{
    protected $table = 'd_package_rundown_detail';
    protected $primaryKey = 'dprd_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'dprd_id',
        'dprd_dt',
        'dprd_package',
        'dprd_schedulle',
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
