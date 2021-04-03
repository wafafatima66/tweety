<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'avatar',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value){
        return asset('storage/' . $value ?: 'storage/avatars/default.png');
    }

    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }

    public function timeline(){
        // return Tweet::where('user_id', $this->id)->latest()->get();

        //include all of the users tweets as well as the tweets of everyone they follow ..in dexcending

        $friends = $this->follows()->pluck('id');
       
        return Tweet::whereIn('user_id',$friends)
        ->orWhere('user_id',$this->id)
        ->withLikes()
        ->latest()->paginate(5);
    }

    public function tweets(){
        return $this->hasMany(Tweet::class);
    }

    public function following(User $user){
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }

    public function follow(User $user){
        return $this->follows()->save($user);
    }

    public function unfollow(User $user){
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user){
      /*  if($this->following($user)){
           return $this ->unfollow($user);
       }
       return $this->follow($user); */

       $this->follows()->toggle($user);
    }

    public function follows(){
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }

    public function path($append = ''){
        $path =  route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path ; 
    }
   /*  public function getRouteKeyName()
    {
        return 'name';
    } */
   
}
