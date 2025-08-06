<?php

namespace App\Filament\Me\Resources\Moods\Pages;

use App\Filament\Me\Resources\Moods\MoodResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMoods extends ListRecords
{
    protected static string $resource = MoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->slideOver(),
        ];
    }
}
