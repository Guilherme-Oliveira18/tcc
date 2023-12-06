<?php

namespace App\Http\Controllers;
use App\Models\Eventos;
use App\Models\Pontos;
use App\Models\Turmas;
use App\Models\Cursos;
use Illuminate\Http\Request;

class Gincana extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index (Eventos $eventos)
    {
        return view(
            'gincana.index'
        );
    }


    public function agenda (Eventos $eventos)
    {
        return view(
            'gincana.agenda',
            [
                'eventos'=>$eventos->Ativado()->latest('eventoData')->get()
            ]
        );
    }

    public function mascote (Turmas $turmas)
    {
        return view(
            'gincana.mascote',
            [
                'turmas'=>$turmas->AtivadoTurma()->latest('ano_saiu')->get()
            ]
        );
    }
    public function pontos (Pontos $pontos)
    {
        return view(
            'gincana.tblpontos',
            [
                'pontos'=>$pontos->AtivadoPontos()->oldest('turmas_id')->get(),
            ]
        );
    }

    public function regulamento (Pontos $pontos)
    {
        return view(
            'gincana.regulamento'
        );
    }

}
