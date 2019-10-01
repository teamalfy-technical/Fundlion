<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FlClientsFilesType extends Model
{
    //User Roles Relations
    public function type(){
        return $this->belongsTo(FlClientsFiles::class, 'type_id', 'id');
    }
}
