<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Xot\Filament\Resources\ModuleResource;
=======
namespace Modules\Xot\Filament\Resources\ModuleResource\Pages;

use Modules\Xot\Filament\Resources\ModuleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
>>>>>>> e01854d (📝 (EnvData.php): Update method signatures in EnvData class to specify return types for better type safety and clarity)

class EditModule extends EditRecord
{
    protected static string $resource = ModuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
