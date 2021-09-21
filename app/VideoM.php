<?php

namespace PF_PAPW2;

use Illuminate\Database\Eloquent\Model;

class VideoM extends Model
{
    protected $table = 'video_m_s';

    protected $fillable = [
        'title', 'path', 'image_video', 'id_category', 'id_user',
    ];

    public function category(){
        return $this->hasOne('PF_PAPW2\category','id_category');
    }

    public function usuario(){
        return $this->hasOne('PF_PAPW2\User','');
    }
}
