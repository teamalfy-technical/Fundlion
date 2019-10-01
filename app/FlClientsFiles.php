<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FlClientsFiles extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'type_id', 'type_custom', 'file'
    ];

    //User Roles Relations
    public function type(){
        return $this->hasOne(FlClientsFilesType::class, 'id', 'type_id');
    }
}
