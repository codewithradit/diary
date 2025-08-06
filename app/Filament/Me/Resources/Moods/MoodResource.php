<?php

namespace App\Filament\Me\Resources\Moods;

use App\Filament\Me\Resources\Moods\Pages\ListMoods;
use App\Filament\Me\Resources\Moods\Schemas\MoodForm;
use App\Filament\Me\Resources\Moods\Tables\MoodsTable;
use App\Models\Mood;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MoodResource extends Resource
{
    protected static ?string $model = Mood::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return MoodForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MoodsTable::configure($table);
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
            'index' => ListMoods::route('/'),
        ];
    }
}
