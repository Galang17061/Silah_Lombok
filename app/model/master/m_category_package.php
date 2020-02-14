<?php

namespace App\model\functions;

use Illuminate\Database\Eloquent\Model;

class m_category_package extends model
{
    protected $table = 'm_category_package';
    protected $primaryKey = 'mcp_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'mcp_id',
        'mcp_title',
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
