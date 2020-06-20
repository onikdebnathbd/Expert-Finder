<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name', 'slug', 'status', 'district_id'];

    public function district() {
        return $this->belongsTo('App\Models\Admin\District');
    }
}
