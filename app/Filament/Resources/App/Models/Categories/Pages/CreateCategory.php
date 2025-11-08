<?php

namespace App\Filament\Resources\App\Models\Categories\Pages;

use App\Filament\Resources\App\Models\Categories\CategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
