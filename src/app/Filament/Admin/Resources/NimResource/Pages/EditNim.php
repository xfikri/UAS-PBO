<?php

namespace App\Filament\Admin\Resources\NimResource\Pages;

use App\Filament\Admin\Resources\NimResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNim extends EditRecord
{
    protected static string $resource = NimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
