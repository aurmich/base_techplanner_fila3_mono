<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Xot\Providers;
=======
/**
 * Provides event handling configuration for the Setting module.
 *
 * This class extends the base event service provider and configures the event
 * handling for the Setting module. It indicates that events should be
 * discovered, but does not define any specific event listeners.
 */

declare(strict_types=1);

namespace Modules\Setting\Providers;
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)

use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;

class EventServiceProvider extends BaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];
<<<<<<< HEAD

=======
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
    protected function configureEmailVerification(): void
    {
<<<<<<< HEAD
=======
        // ...
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
    }
}
