<?php

namespace App;

use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'status_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
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

    public static function add($fields)
    {
        $user = new static();
        $user->fill($fields);
        $user->save();
        $user->hashPassword($fields['password']);
        $user->info()->create($fields);
        $user->links()->create($fields);
        return $user;
    }

    public function hashPassword($password)
    {
        if ($password) {
            $this->password = Hash::make($password);
            $this->save();
        }
    }

    public function addAvatar(?UploadedFile $avatar)
    {
        if ($avatar) {
            $image = $avatar->store('', 'avatars');
            $this->info->image = $image;
            $this->info->save();
        }
    }

    public function removeAvatar()
    {
        if ($image = $this->info->image) {
            Storage::disk('avatars')->delete($image);
        }
    }

    public function updateAvatar(UploadedFile $avatar)
    {
        $this->removeAvatar();
        $this->addAvatar($avatar);
    }

    public function updateInfo($fields)
    {
        $this->info->update($fields);
    }

    public function updateSecurity($fields)
    {
        $this->hashPassword($fields['password']);
        $this->email = $fields['email'];
        $this->save();
    }

    public function remove()
    {
        $this->removeAvatar();
        $this->delete();
    }
}
