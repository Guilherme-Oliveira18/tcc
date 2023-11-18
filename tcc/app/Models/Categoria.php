<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    const cat_cinza = 'cinza';
    const cat_azul = 'azul';
    const cat_vermelho = 'vermelho';
    const cat_amarelo = 'amarelo';
    const cat_rosa = 'rosa';
    const cat_indigo = 'indigo';
    const cat_roxo = 'roxo';
    const cat_verde = 'verde';
    const cat_lime = 'lime';

    const CATEGORIAS_DEFAULT = 'cinza';
    const CATEGORIAS = [
        self::cat_cinza => 'Cinza',
        self::cat_azul => 'Azul',
        self::cat_vermelho => 'Vermelho',
        self::cat_amarelo => 'Amarelo',
        self::cat_rosa => 'Rosa',
        self::cat_indigo => 'Indigo',
        self::cat_roxo => 'Roxo',
        self::cat_verde => 'Verde',
        self::cat_lime => 'Limão',
    ];
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


