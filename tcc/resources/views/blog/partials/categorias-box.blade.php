<div id="recommended-topics-box">
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Tópicos</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        @foreach ($categorias as $categoria)
            <x-post.categoria-badge :categoria="$categoria" />
        @endforeach
    </div>
</div>
