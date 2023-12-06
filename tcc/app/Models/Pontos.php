<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pontos extends Model
{
    protected $fillable = ['eventos_id', 'turmas_id', 'quantidade', 'valido','descricao'];
    use HasFactory;

    public function scopePegaTudo($query)
    {
        $query=DB::select('SUM(quantidade) from pontos ' );
        return $query;
    }
    public function scopeAtivadoPontos($query)
    {
        $query->where('valido', true);
    }
    public function eventos()
    {
        return $this->belongsTo(Eventos::class,'eventos_id');
    }
    public function turmas()
    {
        return $this->belongsTo(Turmas::class,'turmas_id');
    }
}
