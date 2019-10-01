<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlBusinessStructure extends Model
{
    //User Roles Relations
    public function company(){
        return $this->belongsTo(FlCompanyDetail::class, 'business_structure_id', 'id');
    }
}
