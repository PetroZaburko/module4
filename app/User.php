<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'status_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded = [
        'is_admin'
    ];

    public function info()
    {
        return $this->hasOne(UserInfo::class);
    }

    public function links()
    {
        return $this->hasOne(UserLinks::class);
    }

    public function status()
    {
        return $this->belongsTo(UserStatuses::class);
    }
}
