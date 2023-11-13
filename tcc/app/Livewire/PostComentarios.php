<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostComentarios extends Component
{
    public Post $post;

    #[Computed]
    public function comentarios()
    {
        return $this?->post
            ?->comentarios()
            ->latest()
            ->paginate(10);
    }

    #[Rule('required|min:3|max:200')]
    public string $comentario;

    #[Rule('required|min:3|max:200')]
    public string $feedback;

    public function PostComentario()
    {
        if (auth()->guest()) {
            return;
        }
        $this->validateOnly('comentario');

        $this->post->comentarios()->create([
            'comentario' => $this->comentario,
            'user_id' => auth()->id(),
        ]);

        $this->reset('comentario');
    }
    public function render()
    {
        return view('livewire.post-comentarios');
    }
}
