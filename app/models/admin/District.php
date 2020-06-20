<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name', 'slug', 'status', 'division_id'];

    public function division() {
        return $this->belongsTo('App\Models\Admin\Division');
    }

    public function area() {
        return $this->hasMany('App\Models\Admin\Area');
    }

    /*public function divisionCountry()
    {
        return $this->hasOneThrough('App\Models\Admin\Country', 'App\Models\Admin\Division');
    }*/
}
