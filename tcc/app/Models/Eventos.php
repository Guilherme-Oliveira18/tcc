<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Eventos extends Model
{
    protected $fillable = ['nome', 'categoria', 'slug', 'imagem', 'descricao', 'eventoData', 'ativo'];
    protected $casts = [
        'eventoData' => 'datetime',
    ];
    const CAT_CULTURAIS = 'CULTURAIS';

    const CAT_FILANTROPICAS = 'FILANTROPICAS';
    const CAT_ESPORTIVAS = 'ESPORTIVAS';
    const CAT_DEFAULT = self::CAT_ESPORTIVAS;
    const categorias = [
        self::CAT_CULTURAIS => 'Culturais',
        self::CAT_FILANTROPICAS => 'Filantropicas',
        self::CAT_ESPORTIVAS => 'Esportivas',
    ];
    public function getThumbnailUrl()
    {
        $isUrl = str_contains($this->imagem, 'http');

        return $isUrl ? $this->imagem : Storage::disk('public')->url($this->imagem);
    }

    public function pontos()
    {
        return $this->hasMany(Pontos::class);
    }

    public function resumo()
    {
        return Str::limit(strip_tags($this->body), 150);
    }
    public function scopePublicado($query)
    {
        $query->where('eventoData', '<=', Carbon::now());
    }
    public function scopeAtivado($query)
    {
        $query->where('ativo', true);
    }
    use HasFactory;
}
