<?php

namespace App\Filament\Resources\TurmasResource\Pages;

use App\Filament\Resources\TurmasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTurmas extends ListRecords
{
    protected static string $resource = TurmasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
