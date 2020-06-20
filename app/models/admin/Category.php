<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The posts that belong to the Category.
     */
    public function ads()
    {
        return $this->belongsToMany('App\Models\User\Ad')->orderBy('created_at', 'DESC')->where('visibility', 1)->paginate(9);
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->orderBy('created_at', 'DESC')->where('visibility', 1)->paginate(9);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
