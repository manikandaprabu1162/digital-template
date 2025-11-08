<?php

namespace App\Filament\Resources\Assets\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AssetForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->required(),
                Textarea::make('description')->required()->columnSpanFull(),
                Textarea::make('short_description')->columnSpanFull(),
                TextInput::make('price')->required()->numeric()->prefix('$'),
                TextInput::make('sale_price')->numeric(),
                FileUpload::make('file_url')->label('File')->disk('public')->directory('assets/files')
                    ->required()
                    // limit to 5 MB by default (adjust to your needs)
                    ->maxSize(5120)
                    ->preserveFilenames(false),
                TextInput::make('preview_url')->url(),
                FileUpload::make('thumbnail_url')
                    ->label('Thumbnail')
                    ->image()
                    ->disk('public')
                    ->directory('assets/thumbnails')
                    ->required()
                    ->maxSize(2048)
                    ->preserveFilenames(false),
                Select::make('category_id')->relationship('category', 'name')->required(),
                Toggle::make('is_active')->required(),
                Toggle::make('is_featured')->required(),
            ]);
    }
}
