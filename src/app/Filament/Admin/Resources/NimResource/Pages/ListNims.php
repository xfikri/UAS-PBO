<?php

namespace App\Filament\Admin\Resources\NimResource\Pages;

use App\Filament\Admin\Resources\NimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNims extends ListRecords
{
    protected static string $resource = NimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
