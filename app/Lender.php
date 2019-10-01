<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Lender extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title_id','first_name','last_name','job_title','email','phone','mobile','skype','password', 'role', 'active', 'avatar',
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
    public function detail(){
        return $this->hasOne(FlLendersDetails::class, 'lender_id', 'id');
    }

    //User Roles Relations
    public function loan(){
        return $this->hasOne(FlClientsLoan::class, 'lender_id', 'id');
    }
}
