<?php

/**
 * @see https://github.com/DutchCodingCompany/filament-socialite
 */

declare(strict_types=1);

namespace Modules\User\Actions\Socialite;

use ArrayAccess;
use Illuminate\Support\Arr;
use Spatie\QueueableAction\QueueableAction;

use function is_array;

class GetProviderScopesAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $provider): array
    {
        /**
         * @var array|ArrayAccess
         */
        $services = config('services');
        $scopes = Arr::get($services, $provider.'.scopes');
        if (! is_array($scopes)) {
            return [];
        }

        return $scopes;
    }
}
