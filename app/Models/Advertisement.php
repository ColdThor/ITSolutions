<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Advertisement extends Model
{



    protected $table = 'advertisement';
    protected $primaryKey = 'id_advertisement';


    protected $fillable = [
        'title','description','date','contact_mail','contact_phone','price','area','views','id_user','id_condition','id_type','id_specification','id_location'
    ];



    public function user() {
        return $this->belongsTo('\App\Models\User');
    }


    public function condition() {
        return $this->belongsTo('\App\Models\Condition');
    }

    public function type() {
        return $this->belongsTo('\App\Models\Type');
    }

    public function specification() {
        return $this->belongsTo('\App\Models\Specification');
    }

    public function location() {
        return $this->belongsTo('\App\Models\Location');
    }


}