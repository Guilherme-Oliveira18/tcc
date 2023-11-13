<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'slug',
        'cor_texto',
        'cor_bg',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}


