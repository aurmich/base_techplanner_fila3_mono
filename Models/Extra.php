<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Builder;
use Spatie\SchemalessAttributes\Casts\SchemalessAttributes;
use Spatie\SchemalessAttributes\SchemalessAttributesTrait;
use Webmozart\Assert\Assert;

/**
 * Model Extra.
 *
 * @property int                                               $id
 * @property int|null                                          $model_id
 * @property string|null                                       $model_type
 * @property \Spatie\SchemalessAttributes\SchemalessAttributes $extra_attributes
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel disableCache()
 * @method static \Modules\Xot\Database\Factories\ExtraFactory    factory($count = null, $state = [])
 * @method static Builder|Extra                                   newModelQuery()
 * @method static Builder|Extra                                   newQuery()
 * @method static Builder|Extra                                   query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModel withCacheCooldownSeconds(?int $seconds = null)
 * @method static Builder|Extra                                   withExtraAttributes()
 *
 * @mixin \Eloquent
 */
class Extra extends BaseModel
{
    use SchemalessAttributesTrait;

    protected $fillable = [
        'id',
        'model_id',
        'model_type',
        'extra_attributes',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'extra_attributes' => SchemalessAttributes::class,
        ];
    }

    public function scopeWithExtraAttributes(): Builder
    {
        Assert::notNull($this->extra_attributes, '['.__FILE__.']['.__LINE__.']');

        return $this->extra_attributes->modelScope();
    }
}
