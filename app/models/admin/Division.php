<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['name', 'slug', 'status', 'country_id'];

    public function country() {
        return $this->belongsTo('App\Models\Admin\Country');
    }

    public function district() {
        return $this->hasMany('App\Models\Admin\District');
    }
}
