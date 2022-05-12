<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //se agrega para la proteccion de asiganacion massiva
    protected $fillable = ['title', 'excerpt', 'content'];
    public function comments()
    {
        return $this->hasMany(Comment::class);

    }
}
