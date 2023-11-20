<?php

namespace App\Livewire;

use App\Models\Eventos;
use Livewire\Attributes\Computed;
use Livewire\Component;

class EventosList extends Component
{


    #[Url()]
    public $sort = 'desc';

    public function setSort($sort)
    {
        $this->sort = $sort === 'desc' ? 'desc' : 'asc';
    }


    #[Computed()]
    public function posts()
    {
        return Eventos::published()

            ->orderBy('eventoData', $this->sort)
            ->paginate(5);
    }

    public function render()
    {
        return view('livewire.eventos-list');
    }
}
