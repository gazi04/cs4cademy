<?php

namespace App\Filament\Resources\Achievements\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AchievementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('icon_path')
                    ->default(null),
                TextInput::make('xp_bonus')
                    ->required()
                    ->numeric()
                    ->default(50),
            ]);
    }
}
