<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /*use Authenticatable, CanResetPassword;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use  Notifiable;
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public function roles(){
      return $this->belongsTomany('App\Rol','user_role','user_id','role_id');
    }

    public function hasAnyRole($roles){
      if(is_array($roles)){
        foreach ($roles as $role) {
          if($this->hasRole($role)){
            return true;
          }
        }
      }else {
        if($this->hasRole($roles)){
          return true;
        }
      }
      return false;
    }

    public function hasRole($role)
    {
        if($this->roles()->where('descrip',$role)->first()){
        return true;
        }
      return false;
        }
}
