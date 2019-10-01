<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlRole extends Model
{
    //User Roles Relations
    public function company(){
        return $this->belongsTo(FlRole::class, 'role_id', 'id');
    }
}
