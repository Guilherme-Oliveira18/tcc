<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventosResource\Pages;
use App\Filament\Resources\EventosResource\RelationManagers;
use App\Models\Eventos;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class EventosResource extends Resource
{
    protected static ?string $model = Eventos::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Conteúdo')
                ->schema([
                TextInput::make('nome')
                ->required()
                ->live(onBlur: true)
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
                Forms\Components\Select::make('categoria')
                ->label(__('Fase da gincana:'))
                ->options(Eventos::categorias)
                ->required(),
                ])
                ->columns(3),
            Section::make('Resto')->schema([
                    Textarea::make('descricao')
                    ->rows(1)
                    ->cols(1)
                    ->required()
                    ->label(__('Descrição')),
                    FileUpload::make('imagem')
                    ->required()
                    ->label(__('Imagem'))
                    ->image()
                    ->directory('eventos/thumbnails'),
                    DatePicker::make('eventoData')->label(__('Data do evento'))
                    ->timezone('America/Sao_Paulo')
                    ->displayFormat('d/m/Y')
                    ->closeOnDateSelection()
                    ->required(),
                    Checkbox::make('ativo') ->label(__('Mostrar Evento'))

                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('imagem')->label(__('Thumbnail')),
                TextColumn::make('nome')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('categoria')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('eventoData')
                    ->label(__('Data do Evento'))
                    ->date('d-m-Y')
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
            'index' => Pages\ListEventos::route('/'),
            'create' => Pages\CreateEventos::route('/create'),
            'edit' => Pages\EditEventos::route('/{record}/edit'),
        ];
    }
}
