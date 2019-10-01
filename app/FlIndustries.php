<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlIndustries extends Model
{
    //User Roles Relations
    public function company(){
        return $this->belongsTo(FlCompanyDetail::class, 'industry_id', 'id');
    }
}
