<?php

namespace App\Filament\Resources\ComentariosResource\Pages;

use App\Filament\Resources\ComentariosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditComentarios extends EditRecord
{
    protected static string $resource = ComentariosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
