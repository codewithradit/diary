<?php

namespace App\Filament\Me\Resources\Moods\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class MoodForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Group::make([
                    TextInput::make('name')
                        ->required(),
                    TextInput::make('icon'),
                    TextInput::make('color'),
                ])->columnSpanFull()->columns(1)->inlineLabel()
            ]);
    }
}
