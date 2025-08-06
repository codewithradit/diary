<?php

namespace App\Filament\Me\Resources\Journals\Pages;

use App\Filament\Me\Resources\Journals\JournalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\Width;

class ListJournals extends ListRecords
{
    protected static string $resource = JournalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->slideOver()->modalWidth(Width::SixExtraLarge),
        ];
    }
}
