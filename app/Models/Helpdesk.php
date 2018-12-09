<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Helpdesk extends Model
{


    protected $table = 'helpdesk';
    protected $primaryKey = 'id_helpdesk';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','text','was_read'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
