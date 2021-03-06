<?php

namespace App\Models;
use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function buscar_posts(){
        
        //$tags = $this->hasMany("App\Models\Tag_Noticia");
        return $this->belongsToMany('App\Models\Post','tag__noticias','tag_id','post_id');
    }
}
