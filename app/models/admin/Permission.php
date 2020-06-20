<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function getForAttribute($value) {
        return ucfirst($value);
    }
}
