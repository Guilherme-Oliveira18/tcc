<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TurmasResource\Pages;
use App\Filament\Resources\TurmasResource\RelationManagers;
use App\Models\Cursos;
use App\Models\Turmas;
use DateTime;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Str;

class TurmasResource extends Resource
{
    protected static ?string $model = Turmas::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Conteúdo')
                ->schema([

                TextInput::make('nome')
                ->live(onBlur: true)
                ->placeholder(__('ex: Turma de Desenvolvimento de Sistemas 21-23'))
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
                    Select::make('cursos_id')
                    ->relationship('cursos', 'numeracao')
                    ->label(__('EM da turma:'))
                    ->prefix('EM')
                    ->searchable()
                    ->required(),
                    TextInput::make('mascote_nome')
                    ->required()
                    ->minLength(5)
                    ->label(__('Nome do mascote:'))
                    ->maxLength(150),
                    DatePicker::make('ano_entrou')->label(__('Ano de inserção'))
                    ->timezone('America/Sao_Paulo')
                    ->native(false)
                    ->format('Y')
                    ->displayFormat('Y')
                    ->closeOnDateSelection()
                    ->maxDate(now()),
                    DatePicker::make('ano_saiu')->label(__('Ano de desligamento'))
                    ->after('ano_entrou')
                    ->timezone('America/Sao_Paulo')
                    ->native(false)
                    ->format('Y')
                    ->displayFormat('Y')
                    ->closeOnDateSelection(),
                ])
                ->columns(2),
                Section::make('Tags')->schema([

                    Checkbox::make('ativo') ->label(__('Turma ativa')),
                    FileUpload::make('imagem')
                    ->required()
                    ->label(__('Foto da turma:'))
                    ->image()
                    ->directory('turmas/mascotes'),
                ]),



            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([

                ImageColumn::make('imagem')->label(__('Foto da Turma')),
                TextColumn::make('nome')
                ->sortable()
                ->searchable(),
                TextColumn::make('cursos.numeracao')
                ->prefix('EM ')
                ->sortable()
                ->searchable(),
                TextColumn::make('mascote_nome')
                ->sortable()
                ->searchable(),
                TextColumn::make('ano_saiu')
                    ->label(__('ANO FINAL'))
                    ->date('Y')
                    ->sortable()
                    ->searchable(),
                CheckboxColumn::make('ativo') ->label(__('Turma ativa')),
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
            'index' => Pages\ListTurmas::route('/'),
            'create' => Pages\CreateTurmas::route('/create'),
            'edit' => Pages\EditTurmas::route('/{record}/edit'),
        ];
    }
}
