<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CursosResource\Pages;
use App\Filament\Resources\CursosResource\RelationManagers;
use App\Models\Cursos;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
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
use Illuminate\Support\Str;

class CursosResource extends Resource
{
    protected static ?string $model = Cursos::class;

    protected static ?string $navigationIcon = 'heroicon-s-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nome')
                ->live(onBlur: true)
                ->placeholder(__('ex: Desenvolvimento de sistemas integrado ao Ensino Médio'))
                ->required()
                ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                    if ($operation === 'edit') {
                        return;
                    }

                    $set('slug', Str::slug($state));
                    }),
                TextInput::make('slug')
                ->required()
                ->minLength(1)
                ->unique(ignoreRecord: true)
                ->maxLength(150),

                Forms\Components\Select::make('numeracao')
                ->label(__('Numeração do Curso:'))
                ->options(Cursos::numeracao)
                ->required(),
                Textarea::make('descricao')
                ->rows(1)
                ->cols(1)
                ->required()
                ->label(__('Descrição')),
                Checkbox::make('ativo') ->label(__('Curso ativo'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nome')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('numeracao')
                    ->prefix('EM')
                    ->sortable()
                    ->searchable(),
                CheckboxColumn::make('ativo') ->label(__('Ativo')),
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
            'index' => Pages\ListCursos::route('/'),
            'create' => Pages\CreateCursos::route('/create'),
            'edit' => Pages\EditCursos::route('/{record}/edit'),
        ];
    }
}
