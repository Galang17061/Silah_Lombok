<?php

namespace App\model\functions;

use Illuminate\Database\Eloquent\Model;

class d_package_rundown extends model
{
    protected $table = 'd_package_rundown';
    protected $primaryKey = 'dpr_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'dpr_id',
        'dpr_package',
        'dpr_package',
        'dpr_day',
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
