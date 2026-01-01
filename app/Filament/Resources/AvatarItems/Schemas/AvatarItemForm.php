<?php

namespace App\Filament\Resources\AvatarItems\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AvatarItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Select::make('type')
                    ->options(['hat' => 'Hat', 'shirt' => 'Shirt', 'gear' => 'Gear', 'background' => 'Background'])
                    ->required(),
                TextInput::make('cost')
                    ->required()
                    ->numeric()
                    ->default(100)
                    ->prefix('$'),
                FileUpload::make('image_path')
                    ->image()
                    ->required(),
            ]);
    }
}
