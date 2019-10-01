<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FlMessage extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'manager_id', 'sent_id', 'subject', 'message', 'read', 'replied', 'message_id'
    ];

    //User Roles Relations
    public function client(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    //User Roles Relations
    public function manager(){
        return $this->belongsTo(User::class, 'manager_id', 'id');
    }
}
