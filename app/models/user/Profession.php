<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
