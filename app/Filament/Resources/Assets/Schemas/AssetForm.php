<?php

namespace App\Filament\Resources\Assets\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('short_description')
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('sale_price')
                    ->numeric(),
                TextInput::make('file_url')
                    ->url()
                    ->required(),
                TextInput::make('preview_url')
                    ->url(),
                TextInput::make('thumbnail_url')
                    ->url()
                    ->required(),
                TextInput::make('version')
                    ->required()
                    ->default('1.0.0'),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('user_id')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
                Toggle::make('is_featured')
                    ->required(),
                TextInput::make('download_count')
                    ->required()
                    ->numeric()
                    ->default(0),
                TextInput::make('file_size')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
