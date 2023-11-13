<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id', 'titulo', 'slug', 'image', 'body', 'publidado_em', 'featured'];

    public function getThumbnailUrl()
    {
        $isUrl = str_contains($this->image, 'http');

        return $isUrl ? $this->image : Storage::disk('public')->url($this->image);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }

    protected $casts = [
        'publidado_em' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function comentarios()
    {
        return $this->hasMany(Comentarios::class);
    }
    public function scopePublished($query)
    {
        $query->where('publidado_em', '<=', Carbon::now());
    }

    public function scopeWithCategoria($query, string $categoria)
    {
        $query->whereHas('categorias', function ($query) use ($categoria) {
            $query->where('slug', $categoria);
        });
    }
    public function scopeFeatured($query)
    {
        $query->where('featured', true);
    }

    public function scopeSearch($query,$search='')
    {
        $query->where('titulo', 'like', "%{$search}%");
    }
    public function scopepopular($query)
    {
        //conta_like
        $query
            ->withCount('likes')
            //organiza por quem tem mais like
            ->orderBy('likes_count', 'desc');
    }
    public function resumo()
    {
        return Str::limit(strip_tags($this->body), 150);
    }

    public function getReadingTime()
    {
        $mins = round(str_word_count($this->body) / 250);

        return $mins < 1 ? 1 : $mins;
    }
}
