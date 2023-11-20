<?php

namespace App\Filament\Resources\TurmasResource\Pages;

use App\Filament\Resources\TurmasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTurmas extends EditRecord
{
    protected static string $resource = TurmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
