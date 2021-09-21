<?php

namespace PF_PAPW2;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name_category',
    ];

    public function videos(){
        return $this->hasMany('PF_PAPW2\VideoM','id_category','id');
    }
}
