<?php

namespace App\Filament\Resources\PostResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ComentariosRelationManager extends RelationManager
{
    protected static string $relationship = 'comentarios';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('comentario')
                ->required()
                ->maxLength(255),
            Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->preload()
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('comentario')
            ->columns([Tables\Columns\TextColumn::make('comentario')])
            ->filters([
                //
            ])

            ->actions([Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()]);
    }
}
