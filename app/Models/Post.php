<?php

namespace App\Models;
use App\Models\Media;
use App\Models\Tag_Noticia;
use App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    public $timestamps= true;


    public function buscar_midias(){
        
     return $this->hasMany('App\Models\Media', 'post_id_media');
    }

    public function buscar_tags(){
        
        //$tags = $this->hasMany("App\Models\Tag_Noticia");
        return $this->belongsToMany('App\Models\Tag','tag__noticias','post_id','tag_id');
    }
}
