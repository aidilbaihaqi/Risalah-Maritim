<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-s-envelope';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('category')
                ->required()
                ->disabled(),

                Forms\Components\TextInput::make('to')
                ->required()
                ->disabled(),

                Forms\Components\TextInput::make('name')
                ->required()
                ->disabled(),

                Forms\Components\Textarea::make('description')->required()->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category')->label('Kategori'),
                TextColumn::make('to')->label('Kepada'),
                TextColumn::make('name')->label('Tujuan Spesifik'),
                TextColumn::make('description')
                ->label('Deskripsi')
                ->limit(50)
                ->tooltip(fn($record) => $record->description),
                TextColumn::make('created_at')->label('Created At')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->disabledForm(),
                Tables\Actions\DeleteAction::make()
                ->label('Hapus') // Ubah label tombol
                ->tooltip('Hapus data ini') // Tooltip tambahan
                ->requiresConfirmation() // Tampilkan konfirmasi sebelum hapus
                ->icon('heroicon-o-trash') // Ganti ikon jika diperlukan
                ->color('danger'), // Warna tombol
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFeedback::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
