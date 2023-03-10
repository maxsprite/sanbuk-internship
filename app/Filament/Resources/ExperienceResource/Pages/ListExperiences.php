<?php

namespace App\Filament\Resources\ExperienceResource\Pages;

use App\Filament\Resources\ExperienceResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListExperiences extends ListRecords
{
    protected static string $resource = ExperienceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        $user = auth()->user();
        if ($user->type === User::TYPE_VENDOR) {
            return parent::getTableQuery()->withoutGlobalScopes()->where('vendor_id', $user->id);
        }

        return parent::getTableQuery()->withoutGlobalScopes();
    }
}
