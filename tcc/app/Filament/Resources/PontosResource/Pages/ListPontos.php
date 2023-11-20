<?php

namespace App\Filament\Resources\PontosResource\Pages;

use App\Filament\Resources\PontosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPontos extends ListRecords
{
    protected static string $resource = PontosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
