<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ComentariosResource\Pages;
use App\Filament\Resources\ComentariosResource\RelationManagers;
use App\Models\Comentarios;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use App\Filament\Resources\preload;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ComentariosResource extends Resource
{
    protected static ?string $model = Comentarios::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->label(__('Nome do usuário'))
                ->searchable()
                ->preload()
                ->required(),
            Select::make('post_id')
                ->relationship('post', 'titulo')
                ->label(__('Nome do Post'))
                ->searchable()
                ->preload()
                ->required(),
            TextInput::make('comentario')
                ->label(__('Comentário'))
                ->required()
                ->minLength(3)
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name') ->label(__('Nome do Usuário')) ,
                TextColumn::make('post.titulo') ->label(__('Nome do Post'))  ,
                TextColumn::make('comentario') ->label(__('Comentário')) ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
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
            'index' => Pages\ListComentarios::route('/'),
            'create' => Pages\CreateComentarios::route('/create'),
            'edit' => Pages\EditComentarios::route('/{record}/edit'),
        ];
    }
}
