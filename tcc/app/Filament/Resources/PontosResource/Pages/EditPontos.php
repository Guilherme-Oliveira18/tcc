<?php

namespace App\Filament\Resources\PontosResource\Pages;

use App\Filament\Resources\PontosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPontos extends EditRecord
{
    protected static string $resource = PontosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
