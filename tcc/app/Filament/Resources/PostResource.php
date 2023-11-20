<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Filament\Resources\PostResource\RelationManagers\ComentariosRelationManager;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Conteúdo')
                ->schema([
                    TextInput::make('titulo')
                        ->live(onBlur: true)
                        ->label(__('Titulo'))
                        ->required()
                        ->minLength(1)
                        ->maxLength(150)
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
                    RichEditor::make('body')
                        ->required()
                        ->label(__('Materia'))
                        ->fileAttachmentsDirectory('posts/images')
                        ->columnSpanFull(),
                ])
                ->columns(2),
            Section::make('Tags')->schema([
                FileUpload::make('image')
                    ->required()
                    ->label(__('Imagem'))
                    ->image()
                    ->directory('posts/thumbnails'),
                DatePicker::make('publidado_em')->label(__('Publicado em'))
                ->timezone('America/Sao_Paulo')
                ->displayFormat('d/m/Y')
                ->closeOnDateSelection()
                ->maxDate(now())
                ->native(false)
                ->nullable(),
                Checkbox::make('featured') ->label(__('Relevancia')),
                Select::make('user_id')
                    ->relationship('author', 'name')
                    ->label(__('Autor do post'))
                    ->searchable()
                    ->required(),
                Select::make('categorias')
                    ->multiple()
                    ->relationship('categorias', 'titulo')
                    ->searchable(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->label(__('Thumbnail')),
                TextColumn::make('titulo')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('author.name')
                    ->label(__('Autor'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('publidado_em')
                    ->label(__('Data de publicação'))
                    ->date('d-m-Y')
                    ->sortable()
                    ->searchable(),
                CheckboxColumn::make('featured') ->label(__('Relevante')),
            ])
            ->filters([Tables\Filters\TrashedFilter::make()])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make(), Tables\Actions\ForceDeleteBulkAction::make(), Tables\Actions\RestoreBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [
                ComentariosRelationManager::class
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
