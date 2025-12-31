<?php

namespace App\Filament\Resources\AvatarItems;

use App\Filament\Resources\AvatarItems\Pages\CreateAvatarItem;
use App\Filament\Resources\AvatarItems\Pages\EditAvatarItem;
use App\Filament\Resources\AvatarItems\Pages\ListAvatarItems;
use App\Filament\Resources\AvatarItems\Schemas\AvatarItemForm;
use App\Filament\Resources\AvatarItems\Tables\AvatarItemsTable;
use App\Models\AvatarItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AvatarItemResource extends Resource
{
    protected static ?string $model = AvatarItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'AvatarItem';

    public static function form(Schema $schema): Schema
    {
        return AvatarItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AvatarItemsTable::configure($table);
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
            'index' => ListAvatarItems::route('/'),
            'create' => CreateAvatarItem::route('/create'),
            'edit' => EditAvatarItem::route('/{record}/edit'),
        ];
    }
}
