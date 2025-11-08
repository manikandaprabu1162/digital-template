<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                    TextInput::make('name')
                        ->label('Name')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->required()
                        ->unique(ignoreRecord: true),

                    TextInput::make('password')
                        ->label('Password')
                        ->password()
                        ->required(fn ($record) => !$record) // required only on create
                        ->minLength(6)
                        ->dehydrated(fn ($state) => filled($state)) // only save if filled
                        ->hiddenOn('edit'),

                    Select::make('role')
                        ->label('Role')
                        ->options(Role::pluck('name', 'id')->toArray())
                        ->required()
                        ->searchable(),

                    Toggle::make('is_active')
                        ->label('Active')
                        ->default(true),
            ]);
    }
}
