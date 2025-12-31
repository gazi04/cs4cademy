<?php

namespace App\Filament\Resources\AvatarItems\Pages;

use App\Filament\Resources\AvatarItems\AvatarItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAvatarItems extends ListRecords
{
    protected static string $resource = AvatarItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
