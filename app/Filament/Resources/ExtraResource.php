<?php

declare(strict_types=1);

namespace Modules\Xot\Filament\Resources;

use Modules\Xot\Filament\Resources\ExtraResource\Pages;
use Modules\Xot\Models\Extra;

class ExtraResource extends XotBaseResource
{
    protected static ?string $model = Extra::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
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
            'index' => Pages\ListExtras::route('/'),
            'create' => Pages\CreateExtra::route('/create'),
            'edit' => Pages\EditExtra::route('/{record}/edit'),
        ];
    }
}
