<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $fillable = ['nome', 'numeracao', 'slug', 'descricao','ativo'];
    const NUM_EM1 = '1';
    const NUM_EM2 = '2';
    const NUM_EM3 = '3';
    const NUM_EM4 = '4';
    const NUM_EM5 = '5';
    const NUM_EM6 = '6';
    const NUM_EM7 = '7';
    const NUM_TEC = '';

    const NUM_DEFAULT = self::NUM_TEC;
    CONST numeracao =[
        self::NUM_EM1=>"EM1",
        self::NUM_EM2=>"EM2",
        self::NUM_EM3=>"EM3",
        self::NUM_EM4=>"EM4",
        self::NUM_EM5=>"EM5",
        self::NUM_EM6=>"EM6",
        self::NUM_EM7=>"EM7",
        self::NUM_TEC=>"Curso Técnico/FATEC"
    ];
    public function turmas()
    {
        return $this->hasMany(Turmas::class);
    }
    use HasFactory;
}
