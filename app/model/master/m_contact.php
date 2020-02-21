<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_contact extends model
{
    protected $table = 'm_contact';
    protected $primaryKey = 'mc_id';
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
