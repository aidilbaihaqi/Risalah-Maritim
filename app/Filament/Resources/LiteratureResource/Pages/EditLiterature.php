<?php

namespace App\Filament\Resources\LiteratureResource\Pages;

use App\Filament\Resources\LiteratureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLiterature extends EditRecord
{
    protected static string $resource = LiteratureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
