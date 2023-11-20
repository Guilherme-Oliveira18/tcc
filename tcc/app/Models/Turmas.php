<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Turmas extends Model
{
    protected $fillable = ['nome','cursos_id', 'mascote_nome', 'slug', 'imagem','ano_entrou','ano_saiu','ativo'];

    public function getThumbnailUrl()
    {
        $isUrl = str_contains($this->imagem, 'http');

        return $isUrl ? $this->imagem : Storage::disk('public')->url($this->imagem);
    }
    public function cursos()
    {
        return $this->belongsTo(Cursos::class,'cursos_id');
    }
    public function pontos()
    {
        return $this->hasMany(Pontos::class);
    }
    public function scopeAtivadoTurma($query)
    {
        $query->where('ativo', true);
    }
    use HasFactory;
}
