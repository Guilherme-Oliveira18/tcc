<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoriaResource\Pages;
use App\Filament\Resources\CategoriaResource\RelationManagers;
use App\Models\Categoria;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class CategoriaResource extends Resource
{
    protected static ?string $model = Categoria::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titulo')
                ->live()
                ->label(__('Titulo'))
                ->required()->minLength(1)->maxLength(150)
                ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                    if ($operation === 'edit') {
                        return;
                    }

                    $set('slug', Str::slug($state));
                }),
            TextInput::make('slug')->required()->minLength(1)->unique(ignoreRecord: true)->maxLength(150),
            TextInput::make('cor_texto')->nullable()  ->label(__('Cor do Texto')),
            TextInput::make('cor_bg')->nullable() ->label(__('Cor do fundo da tag')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titulo')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                TextColumn::make('cor_texto')->sortable()->searchable() ->label(__('Cor do Texto')),
                TextColumn::make('cor_bg')->sortable()->searchable()->label(__('Cor do fundo')),
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
            'index' => Pages\ListCategorias::route('/'),
            'create' => Pages\CreateCategoria::route('/create'),
            'edit' => Pages\EditCategoria::route('/{record}/edit'),
        ];
    }
}
