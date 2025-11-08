<?php

namespace App\Filament\Resources\App\Models\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\IconPicker;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('name')
                    ->label('Category Name')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, $set) {
                        // Automatically set slug when name changes
                        $set('slug', \Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->helperText('Auto-generated from the name if left empty'),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(3)
                    ->maxLength(65535),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),

                // IconPicker::make('icon')
                //     ->label('Category Icon')
                //     ->columns(6)
                //     ->helperText('Choose an icon to represent the category'),
            ]);
    }
}
