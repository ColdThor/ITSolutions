<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Condition extends Model
{



    protected $table = 'condition';
    protected $primaryKey = 'id_condition';


    protected $fillable = [
        'title'
    ];


}