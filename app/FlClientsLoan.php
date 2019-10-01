<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FlClientsLoan extends Model
{
    use Notifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'lender_id', 'loan_amount', 'loan_purpose_id', 'loan_duration_id', 'loan_rate', 'account_manager_id', 'loan_notes', 'loan_status_id'
    ];

    //User Roles Relations
    public function type(){
        return $this->hasOne(FlClientsFilesType::class, 'id', 'type_id');
    }

    //User Roles Relations
    public function clients(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    //User Roles Relations
    public function lender(){
        return $this->belongsTo(Lender::class, 'lender_id', 'id');
    }

    //User Roles Relations
    public function duration(){
        return $this->hasOne(FlLoansDuration::class, 'id', 'loan_duration_id');
    }

    //User Roles Relations
    public function purpose(){
        return $this->hasOne(FlLoansPurpose::class, 'id', 'loan_purpose_id');
    }

    //User Roles Relations
    public function status(){
        return $this->hasOne(FlLoansStatus::class, 'id', 'loan_status_id');
    }
}
