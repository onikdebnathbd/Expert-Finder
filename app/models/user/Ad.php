<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    /**
     * The categories that belong to the Post.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Admin\Category');
    }

    public function getRouteKeyName()
    {
       return 'slug';
    }
}
