<?php

namespace PF_PAPW2;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title', 'path', 'image_video', 'id_category',
    ];

    public function category(){
        return $$this->hasOne('PF_PAPW2\category');
    }
}
