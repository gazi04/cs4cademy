<?php

namespace App\Filament\Resources\AvatarItems\Pages;

use App\Filament\Resources\AvatarItems\AvatarItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAvatarItem extends EditRecord
{
    protected static string $resource = AvatarItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
