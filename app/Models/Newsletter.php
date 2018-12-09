<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Newsletter extends Model
{


    protected $table = 'newsletter';
    protected $primaryKey = 'id_newsletter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
