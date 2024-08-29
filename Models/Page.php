<?php

declare(strict_types=1);

namespace Modules\Cms\Models;

use Modules\Tenant\Models\Traits\SushiToJsons;
use Modules\Xot\Contracts\ProfileContract;
use Spatie\Translatable\HasTranslations;

/**
 * Modules\Cms\Models\Page.
 *
 * @property string $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $title
 * @property string $content
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $deleted_by
 * @property array|null $content_blocks
 *
 * @method static \Modules\Blog\Database\Factories\PageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereContentBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Page withoutTrashed()
 *
 * @property array|null $sidebar_blocks
 * @property array $footer_blocks
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereFooterBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereSidebarBlocks($value)
 *
 * @property mixed $translations
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereLocale(string $column, string $locale)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereLocales(string $column, array $locales)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereJsonContainsLocale(string $column, string $locale, ?mixed $value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereJsonContainsLocales(string $column, array $locales, ?mixed $value)
 *
<<<<<<< HEAD
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
=======
 * @property-read \Modules\Fixcity\Models\Profile|null $creator
 * @property-read \Modules\Fixcity\Models\Profile|null $updater
>>>>>>> c2c3521 (🐛 (FixJigSawByModuleAction.php): Fix comparison operator in if conditions for better readability)
 *
 * @mixin \Eloquent
 */
class Page extends BaseModel
{
    use HasTranslations;
    use SushiToJsons;

    protected $fillable = [
        'content',
        'slug',
        'title',
        'content_blocks',
        'sidebar_blocks',
        'footer_blocks',
    ];

    /** @var array<int, string> */
    public $translatable = [
        'title',
        // 'description',
        'content_blocks',
        'sidebar_blocks',
        'footer_blocks',
    ];

    public function getRows(): array
    {
        return $this->getSushiRows();
    }

    protected array $schema = [
        'id' => 'integer',
        'title' => 'json',
        'slug' => 'string',
        'content' => 'string',

        'content_blocks' => 'json',
        'sidebar_blocks' => 'json',
        'footer_blocks' => 'json',

        'created_at' => 'datetime',
        'updated_at' => 'datetime',

        'created_by' => 'string',
        'updated_by' => 'string',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @return array<string, string> */
    protected function casts(): array
    {
        return [
            // 'images' => 'array',
            'id' => 'string',
            'uuid' => 'string',
            'date' => 'datetime',
            'published_at' => 'datetime',
            'active' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'content_blocks' => 'array',
            'sidebar_blocks' => 'array',
            'footer_blocks' => 'array',
        ];
    }

    /**
     * Get the path key to the item for the frontend only.
     *
     * @return string
     */
    public function getFrontRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the path key to the item for the frontend only.
     *
     * @return string
     */
    public function getUrl()
    {
        return url('/'.app()->getLocale().'/pages/'.$this->slug);
    }
}
