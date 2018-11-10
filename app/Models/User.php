<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{


    protected $table = 'user';
    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'password','email','telephone','id_user_group'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function usergroup() {
        return $this->belongsTo('\App\Models\Usergroup');
    }







}
