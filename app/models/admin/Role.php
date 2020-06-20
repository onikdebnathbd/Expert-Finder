<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions() {
        return $this->belongsToMany('App\Models\Admin\Permission');
    }

    public function users() {
        return $this->belongsToMany('App\User')->orderBy('created_at', 'DESC')->where('visibility', 1);
    }
}
