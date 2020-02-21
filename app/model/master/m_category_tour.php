<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_tour extends model
{
    protected $table = 'm_category_tour';
    protected $primaryKey = 'mct_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'mct_id',
        'mct_title',
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
