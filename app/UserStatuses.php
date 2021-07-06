<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatuses extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
