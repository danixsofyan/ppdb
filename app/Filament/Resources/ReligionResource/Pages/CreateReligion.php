<?php

namespace App\Filament\Resources\ReligionResource\Pages;

use App\Filament\Resources\ReligionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReligion extends CreateRecord
{
    protected static string $resource = ReligionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
