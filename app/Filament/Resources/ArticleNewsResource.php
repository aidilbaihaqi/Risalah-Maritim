<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleNewsResource\Pages;
use App\Filament\Resources\ArticleNewsResource\RelationManagers;
use App\Models\ArticleNews;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleNewsResource extends Resource
{
    protected static ?string $model = ArticleNews::class;

    protected static ?string $navigationIcon = 'heroicon-s-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->required()
                ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                ->required()
                ->disabled()
                ->visible(fn ($livewire) => $livewire instanceof \Filament\Resources\Pages\EditRecord),

                Hidden::make('slug')
                ->visible(fn ($livewire) => $livewire instanceof \Filament\Resources\Pages\CreateRecord),

                Forms\Components\TextInput::make('author')
                ->required()
                ->maxLength(100),

                Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->searchable()
                ->preload()
                ->required(),

                FileUpload::make('thumbnail'),

                Forms\Components\Radio::make('status')
                ->options([
                    'draft' => 'Draft',
                    'featured' => 'Featured',
                    'published' => 'Published'
                ])
                ->descriptions([
                    'draft' => 'Is not visible.',
                    'scheduled' => 'Long time term.',
                    'published' => 'Is visible.'
                ])->default('draft')->visible(fn ($livewire) => $livewire instanceof \Filament\Resources\Pages\EditRecord),

                Hidden::make('status')
                ->visible(fn ($livewire) => $livewire instanceof \Filament\Resources\Pages\CreateRecord),

                Forms\Components\Radio::make('approval')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected'
                ])
                ->descriptions([
                    'pending' => 'Will visible after new action.',
                    'approved' => 'Is visible',
                    'rejected' => 'Is not visible'
                ])->default('pending')->visible(fn ($livewire) => $livewire instanceof \Filament\Resources\Pages\EditRecord),

                Hidden::make('approval')
                ->visible(fn ($livewire) => $livewire instanceof \Filament\Resources\Pages\CreateRecord),

                RichEditor::make('content')
                ->columnSpanFull()
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo'
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul'),
                Tables\Columns\TextColumn::make('category.name')->label('Kategori'),
                Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->color(fn (string $state): string => match ($state) {
                    'draft' => 'gray',
                    'featured' => 'primary',
                    'published' => 'success',
                })
                ->badge(),
                
                Tables\Columns\TextColumn::make('approval')
                ->label('Persetujuan')
                ->color(fn (string $state): string => match ($state) {
                    'pending' => 'warning',
                    'approved' => 'success',
                    'rejected' => 'danger',
                })
                ->badge(),
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
            'index' => Pages\ListArticleNews::route('/'),
            'create' => Pages\CreateArticleNews::route('/create'),
            'edit' => Pages\EditArticleNews::route('/{record}/edit'),
        ];
    }
}
