<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class UserInfo extends Model
{
    protected $fillable = ['name', 'image', 'company', 'telephone', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserAvatar()
    {
        $avatar =  ($this->image && Storage::disk('avatars')->exists($this->image)) ? $this->image : 'noavatar.png';
        return Storage::disk('avatars')->url($avatar);
    }
}
