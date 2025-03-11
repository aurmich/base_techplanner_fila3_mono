<?php

/**
 * ---.
 */

declare(strict_types=1);

<<<<<<< HEAD
namespace Modules\Xot\Contracts;
=======
namespace Modules\User\Contracts;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Passport\PersonalAccessTokenResult;
use Laravel\Passport\Token;
use Laravel\Passport\TransientToken;

/**
 * @propery \Laravel\Passport\Token|\Laravel\Passport\TransientToken|null $accessToken;
 *
 * @phpstan-require-extends Model
 */
interface PassportHasApiTokensContract
{
    /**
     * Get all of the user's registered OAuth clients.
<<<<<<< HEAD
     *
     * @return HasMany
     */
    public function clients();

    /**
     * Get all of the access tokens for the user.
     *
     * @return HasMany
     */
    public function tokens();

    /**
     * Get the current access token being used by the user.
     *
     * @return Token|TransientToken|null
     */
    public function token();

    /**
     * Determine if the current API token has a given scope.
     *
     * @param string $scope
     *
     * @return bool
     */
    public function tokenCan($scope);

    /**
     * Create a new personal access token for the user.
     *
     * @param string $name
     *
     * @return PersonalAccessTokenResult
     */
    public function createToken($name, array $scopes = []);
=======
     */
    public function clients(): HasMany;

    /**
     * Get all of the access tokens for the user.
     */
    public function tokens(): HasMany;

    /**
     * Get the current access token being used by the user.
     */
    public function token(): Token|TransientToken|null;

    /**
     * Determine if the current API token has a given scope.
     */
    public function tokenCan(string $scope): bool;

    /**
     * Create a new personal access token for the user.
     */
    public function createToken(string $name, array $scopes = []): PersonalAccessTokenResult;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)

    /**
     * Set the current access token for the user.
     *
     * @return $this
     */
    public function withAccessToken(Token|TransientToken $accessToken);
}
