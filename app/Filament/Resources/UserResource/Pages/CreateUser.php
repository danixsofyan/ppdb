<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\ModelHasRoles;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {
        $record =  static::getModel()::create($data);
        $guardian = new ModelHasRoles();
        $guardian->role_id = $data['role_id'];
        $guardian->model_type = 'App\Models\User';
        $guardian->model_id = $data['id'];
        $guardian->save();

        return $record;
    }
}
