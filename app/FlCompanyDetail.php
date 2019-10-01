<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FlCompanyDetail extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'company',
        'country_id',
        'city',
        'zip',
        'business_phone',
        'industry_id',
        'profitable',
        'revenue_id',
        'business_structure_id',
        'trading_for_id',
        'address_one',
        'address_two',
    ];

    //User Roles Relations
    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    //User Roles Relations
    public function industry(){
        return $this->hasOne(FlIndustries::class, 'id', 'industry_id');
    }

    //User Roles Relations
    public function trading_as(){
        return $this->hasOne(FlBusinessStructure::class, 'id', 'business_structure_id');
    }

    //User Roles Relations
    public function trading_for(){
        return $this->hasOne(FlTradingFor::class, 'id', 'trading_for_id');
    }

    //User Roles Relations
    public function revenue(){
        return $this->hasOne(FlRevenue::class, 'id', 'revenue_id');
    }

    //User Roles Relations
    public function country(){
        return $this->hasOne(FlCountry::class, 'id', 'country_id');
    }
}
