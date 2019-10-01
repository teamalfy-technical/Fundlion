<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlTradingFor extends Model
{
    //User Roles Relations
    public function company(){
        return $this->belongsTo(FlCompanyDetail::class, 'trading_for_id', 'id');
    }
}
