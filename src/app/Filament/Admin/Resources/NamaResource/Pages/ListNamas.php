<?php

namespace App\Filament\Admin\Resources\NamaResource\Pages;

use App\Filament\Admin\Resources\NamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNamas extends ListRecords
{
    protected static string $resource = NamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
