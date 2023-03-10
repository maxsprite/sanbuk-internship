<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(self::getUserForm());
    }

    private static function getUserForm()
    {
        if (auth()->user()->type === User::TYPE_VENDOR) {
            return [
                Forms\Components\Grid::make(1)->schema([

                    Forms\Components\Tabs::make('Test')->tabs([
                        Forms\Components\Tabs\Tab::make('General')->schema([
                            Forms\Components\Grid::make()->schema([
                                Forms\Components\Fieldset::make('Information')->schema([
                                    Forms\Components\Select::make('status')->options([
                                        Experience::STATUS_INACTIVE => 'Inactive',
                                        Experience::STATUS_ACTIVE => 'Active',
                                    ]),

                                    Forms\Components\TextInput::make('name'),
                                ])->columnSpan(2),
                            ])->columns(1),
                        ]),
                    ]),

                ]),
            ];
        }

        return [
            Forms\Components\Select::make('status')->options([
                Experience::STATUS_INACTIVE => 'Inactive',
                Experience::STATUS_ACTIVE => 'Active',
            ])->hidden(function () {
                if (auth()->user()->type === User::TYPE_VENDOR) {
                    return true;
                }

                return false;
            }),
            Forms\Components\TextInput::make('name'),
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('updated_at'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
