<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public $search = '';

    #[Url()]
    public $categoria = '';


    #[Url()]
    public $popular = false;

    public function setSort($sort)
    {
        $this->sort = $sort === 'desc' ? 'desc' : 'asc';
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->resetPage();
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()

            ->when($this->CategoriaAtiva,function($query){
                $query->WithCategoria($this->categoria);
            })
            ->when($this->popular,function($query){
                $query->popular();
            })
            ->search($this->search)
            ->orderBy('publidado_em', $this->sort)
            ->paginate(5);
    }

    #[Computed()]
    public function CategoriaAtiva()
    {
        return Categoria::where('slug',$this->categoria)->first();
    }

    public function render()
    {
        return view('livewire.post-list');
    }

    public function limpaFiltros()
    {
        $this->search = '';
        $this->categoria = '';
        $this->resetPage();
    }
}
