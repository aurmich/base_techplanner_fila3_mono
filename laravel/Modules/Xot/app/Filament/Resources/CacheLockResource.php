<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Filament\Forms;
use Modules\Xot\Filament\Resources\CacheLockResource\Pages;
use Modules\Xot\Models\CacheLock;

class CacheLockResource extends XotBaseResource
{
    protected static ?string $model = CacheLock::class;

    /**
     * Get the form schema for the resource.
     *
     * @return array<string, Forms\Components\Component>
     */
    public static function getFormSchema(): array
    {
        return [
            'key' => Forms\Components\TextInput::make('key')
                ->required()
                ->maxLength(255),
            'owner' => Forms\Components\TextInput::make('owner')
                ->required()
                ->maxLength(255),
            'expiration' => Forms\Components\DateTimePicker::make('expiration')
                ->required(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCacheLocks::route('/'),
            'create' => Pages\CreateCacheLock::route('/create'),
            'edit' => Pages\EditCacheLock::route('/{record}/edit'),
        ];
    }
}
