<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FlClientsFunding extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'loan_amount', 'loan_purpose_id', 'loan_duration_id'
    ];

    //User Roles Relations
    public function duration(){
        return $this->hasOne(FlLoansDuration::class, 'id', 'loan_duration_id');
    }

    //User Roles Relations
    public function purpose(){
        return $this->hasOne(FlLoansPurpose::class, 'id', 'loan_purpose_id');
    }
}
