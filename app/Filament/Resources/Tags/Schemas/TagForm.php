<?php

namespace App\Filament\Resources\Tags\Schemas;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ColorPicker;
use Filament\Schemas\Schema;

class TagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255)
                    ->reactive() // updates slug automatically if needed
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', \Str::slug($state))),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),

                ColorPicker::make('color')
                    ->label('Color')
                    ->required()
                    ->default('#000000'),
            ]);
    }
}
