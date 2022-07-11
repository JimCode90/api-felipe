<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blogs";

    public function categoria(){
        return $this->belongsTo(CategoriaBlog::class,'categoria_id', 'id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comentarios(){
        return $this->hasMany(Comentario::class, 'blog_id', 'id');
    }
}
