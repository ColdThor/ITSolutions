<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{



    protected $table = 'location';
    protected $primaryKey = 'id_location';


    protected $fillable = [
        'region'
    ];


}