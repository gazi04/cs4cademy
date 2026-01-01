<?php

namespace App\Filament\Resources\Lessons\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LessonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('course_id')
                    ->relationship('course', 'title')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('order_index')
                    ->required()
                    ->numeric(),
                TextInput::make('xp_reward')
                    ->required()
                    ->numeric()
                    ->default(100),
                TextInput::make('coin_reward')
                    ->required()
                    ->numeric()
                    ->default(25),
            ]);
    }
}
