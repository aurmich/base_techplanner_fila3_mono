<?php

declare(strict_types=1);

namespace Modules\Xot\Datas;

use Illuminate\Support\Facades\File;
use Livewire\Wireable;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Services\FileService;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

/**
 * Undocumented class.
 */
class MetatagData extends Data implements Wireable
{
    use WireableData;

    public string $title; // ' => 'EWall',
    public string $sitename; // ' => 'foodfriendfinder',
    public string $subtitle; // ' => 'Find restaurants, specials, and coupons for free',
    public string $sottotitolo_comune; // ' => '',
    public string $generator; // ' => '',
    public string $charset = 'UTF-8';
    public string $author; // ' => '',
    public string $description; // ' => '',
    public string $keywords; // ' => '',
    public string $nome_regione; // ' => '',
    public string $nome_comune; // ' => '',
    public string $site_title; // ' => '',
    public string $logo; // ' => 'ewall::img/logo.png',
    public string $logo_square; // ' => 'ewall::img/logo.png',
    public string $logo_header; // ' => 'ewall::img/logo.png',
    public string $logo_footer; // ' => 'ewall::img/logo.png',
    public string $logo_alt; // ' => 'Logo',
    public string $hide_megamenu; // ' => false,
    public string $hero_type; // ' => 'with_megamenu_bottom',
    public string $facebook_href; // ' => 'aa',
    public string $twitter_href; // ' => '',
    public string $youtube_href; // ' => '',
    public string $fastlink; // ' => false,
    public string $color_primary; // ' => '#0071b0',
    public string $color_title; // ' => 'white',
    public string $color_megamenu; // ' => '#d60021',
    public string $color_hamburger; // ' => '#000',
    public string $color_banner; // ' => '#000',

    public static function make(): self
    {
        $data = config('metatag');

        if (! \is_array($data)) {
            $path = TenantService::filePath('metatag.php');
            $data = File::getRequire($path);
            if (! \is_array($data)) {
                $data = [];
            }
        }

        return self::from($data);
    }

    public function getLogoHeader()
    {
        return FileService::asset($this->logo_header);
    }
}
