<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerAdvertisementResource\Pages;
use App\Filament\Resources\BannerAdvertisementResource\RelationManagers;
use App\Models\BannerAdvertisement;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Toggle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerAdvertisementResource extends Resource
{
    protected static ?string $model = BannerAdvertisement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('link')
                ->required()
                ->maxLength(255),
                Toggle::make('is_active')
                ->offColor('danger')
                ->onColor('success'),
                Forms\Components\TextInput::make('type')
                ->required()
                ->maxLength(50),
                Forms\Components\TextInput::make('company')
                ->required()
                ->maxLength(100),
                FileUpload::make('thumbnail')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('link')->label('Link'),
                TextColumn::make('is_active')->label('Aktif/Tidak'),
                TextColumn::make('type')->label('Tipe'),
                TextColumn::make('company')->label('Badan'),
                ImageColumn::make('thumbnail')
                ->label('Preview')
                ->size(50)
                ->tooltip(fn ($record) => $record->thumbnail)
                ->url(fn ($record) => asset('storage/' . $record->thumbnail), true),
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
            'index' => Pages\ListBannerAdvertisements::route('/'),
        ];
    }
}
