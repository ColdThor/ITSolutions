<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Specification extends Model
{



    protected $table = 'specification';
    protected $primaryKey = 'id_specification';


    protected $fillable = [
        'title','group'
    ];


}