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

    public function d_package(){
        $this->belongsTo('App\model\functions\d_package', 'dpd_package', 'dp_id');
    }
}
