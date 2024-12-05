<?php

/**
 * @see https://gitlab.com/amvisor/filament-failed-jobs/-/blob/master/src/Resources/FailedJobsResource/Pages/ListFailedJobs.php?ref_type=heads
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\FailedJobResource\Pages;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Artisan;
use Modules\Job\Filament\Resources\FailedJobResource;
use Modules\Job\Models\FailedJob;
use Modules\Xot\Filament\Pages\XotBaseListRecords;

class ListFailedJobs extends XotBaseListRecords
{
    protected static string $resource = FailedJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('retry_all')
<<<<<<< HEAD
                
=======

>>>>>>> origin/v0.2.10
                ->requiresConfirmation()
                ->action(
                    static function (): void {
                        Artisan::call('queue:retry all');
                        Notification::make()
                            ->title('All failed jobs have been pushed back onto the queue.')
                            ->success()
                            ->send();
                    }
                ),

            Action::make('delete_all')
<<<<<<< HEAD
                
=======

>>>>>>> origin/v0.2.10
                ->requiresConfirmation()
                ->color('danger')
                ->action(
                    static function (): void {
                        FailedJob::truncate();
                        Notification::make()
                            ->title('All failed jobs have been removed.')
                            ->success()
                            ->send();
                    }
                ),
        ];
    }
}
