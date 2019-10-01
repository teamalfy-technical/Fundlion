<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'role_id', 'account_manager', 'active', 'avatar', 'password',
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

    //User Roles Relations
    public function company(){
        return $this->hasOne(FlCompanyDetail::class, 'client_id', 'id');
    }

    //User Roles Relations
    public function role(){
        return $this->hasOne(FlRole::class, 'id', 'role_id');
    }

    //User Roles Relations
    public function funding(){
        return $this->hasOne(FlClientsFunding::class, 'client_id', 'id');
    }
    
    //User Roles Relations
    public function loans(){
        return $this->hasOne(FlClientsLoan::class, 'client_id', 'id');
    }

    //User Roles Relations
    public function manager(){
        return $this->hasOne(User::class, 'id', 'account_manager');
    }

    //User Roles Relations
    public function document(){
        return $this->hasOne(FlClientsFiles::class, 'id', 'client_id');
    }
}
