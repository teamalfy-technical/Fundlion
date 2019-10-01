<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlUsersRole extends Model
{
    //User Roles Relations
    public function users(){
        return $this->belongsTo(User::class, 'role_id', 'id');
    }
}
