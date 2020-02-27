<?php

namespace App\model\functions;

use Illuminate\Database\Eloquent\Model;

class d_package extends model
{
    protected $table = 'd_package';
    protected $primaryKey = 'dp_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';

    protected $fillable = [
        'dp_id',
        'dp_title',
        'dp_description',
        'dp_price_include',
        'dp_price_exclude',
        'dp_created_by',
        'dp_created_at',
        'dp_updated_at',
        'dp_updated_by',
    ];

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
    // public function d_shop_image()
    // {
    //     return $this->hasMany('App\model\functions\shop\d_shop_image', 'dsi_shop', 'ds_id');
    // }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->dp_created_at = $model->freshTimestamp();
        });
    }

}
