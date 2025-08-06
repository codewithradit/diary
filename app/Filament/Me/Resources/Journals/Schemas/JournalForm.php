<?php

namespace App\Filament\Me\Resources\Journals\Schemas;

use App\Models\Mood;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class JournalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make()
                    ->columnSpanFull()
                    ->columns(1)
                    ->inlineLabel()
                    ->schema([
                        DatePicker::make('date')
                            ->required()
                            ->default(fn() => today())
                            ->unique(table: 'journals', column: 'date'),
                        Select::make('mood_id')
                            ->label('Mood')
                            ->required()
                            ->options(fn() => Mood::all()->pluck('name', 'id'))
                            ->searchable(),
                        RichEditor::make('story')
                            ->required()
                    ])
            ]);
    }
}
