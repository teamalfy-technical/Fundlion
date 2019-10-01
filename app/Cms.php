<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    // use Notifiable;

//		protected $admin = config('address.name');
//		protected $email = config('address.email');

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'fl_cms_pages';

}
