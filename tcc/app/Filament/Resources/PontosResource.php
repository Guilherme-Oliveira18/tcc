<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PontosResource\Pages;
use App\Filament\Resources\PontosResource\RelationManagers;
use App\Models\Pontos;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PontosResource extends Resource
{
    protected static ?string $model = Pontos::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                    TextInput::make('quantidade')
                    ->integer()
                    ->required(),
                    Textarea::make('descricao')
                    ->rows(1)
                    ->cols(1)
                    ->required()
                    ->label(__('Descrição')),
                    Select::make('turmas_id')
                    ->relationship('turmas', 'mascote_nome')
                    ->label(__('Turma:'))
                    ->prefix('Mascote')
                    ->searchable()
                    ->required(),
                    Select::make('eventos_id')
                    ->relationship('eventos', 'nome')
                    ->label(__('Nome do Evento:'))
                    ->searchable()
                    ->required(),
                    Checkbox::make('valido') ->label(__('Pontos válidos'))

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('turmas.mascote_nome')
                ->sortable()
                ->searchable(),
                TextColumn::make('eventos.nome')
                ->sortable()
                ->searchable(),
                TextColumn::make('quantidade')
                ->sortable()
                ->searchable(),
                TextColumn::make('descricao')
                    ->label(__('Causa'))
                    ->sortable()
                    ->searchable(),
                CheckboxColumn::make('valido') ->label(__('Pontos Válidos')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPontos::route('/'),
            'create' => Pages\CreatePontos::route('/create'),
            'edit' => Pages\EditPontos::route('/{record}/edit'),
        ];
    }
}
