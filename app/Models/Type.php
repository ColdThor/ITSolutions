<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Type extends Model
{



    protected $table = 'type';
    protected $primaryKey = 'id_type';


    protected $fillable = [
        'title'
    ];


}