<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'slug', 'status'];

    public function division() {
       return $this->hasMany('App\Models\Admin\Division');
   }

   public function getRouteKeyName()
    {
        return 'slug';
    }
}
