<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Auth;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    public function role() {
	    return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    public function profil()
    {
        return $this->hasOne('App\Profil', 'profil_id', 'id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin() {
        return Auth::user()->role->name === 'admin';
    }
    public function isManblog() {
        return Auth::user()->role->name === 'manager_blog';
    }
    public function isManshop() {
        return Auth::user()->role->name === 'manager_eshop';
    }

    public function findForPassport($identifier) {
        return User::orWhere('email', $identifier)->where('status', 1)->first();
        }
}
