<?php

declare(strict_types=1);

namespace Modules\Media\Filament\Resources\MediaResource\Pages;

use Filament\Actions\DeleteAction;
<<<<<<< HEAD
use Filament\Resources\Pages\EditRecord;
use Modules\Media\Filament\Resources\MediaResource;

class EditMedia extends EditRecord
=======
use Modules\Media\Filament\Resources\MediaResource;

class EditMedia extends \Modules\Xot\Filament\Resources\Pages\XotBaseEditRecord
>>>>>>> origin/master
{
    protected static string $resource = MediaResource::class;

    /**
     * @return DeleteAction[]
     *
     * @psalm-return list{DeleteAction}
     */
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
