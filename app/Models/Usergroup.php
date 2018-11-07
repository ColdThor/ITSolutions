<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Usergroup extends Model
{


    protected $table = 'user_group';
    protected $primaryKey = 'id_user_group';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
