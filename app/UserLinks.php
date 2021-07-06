<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLinks extends Model
{
    protected $fillable = ['vk', 'telegram', 'instagram'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUserVkLink()
    {
        return config('links.vk_host') . $this->vk;
    }

    public function getUserTelegramLink()
    {
        return config('links.telegram_host') . $this->telegram;
    }

    public function getUserInstagramLink()
    {
        return config('links.instagram_host') . $this->instagram;
    }
}
