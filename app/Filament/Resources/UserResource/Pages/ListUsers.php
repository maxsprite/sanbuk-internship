<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Table;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                BadgeColumn::make('status')
                    ->enum(User::STATUS_LIST)
                    ->colors([
                        'danger' => User::STATUS_INACTIVE,
                        'primary' => User::STATUS_ACTIVE,
                    ])
                ,
                TextColumn::make('type'),
                TextColumn::make('email'),
                TextColumn::make('name'),
            ])
            ->filters([
                //
            ]);
    }
}
