<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Media\Rules\ItemRules;

use Illuminate\Support\Arr;
use Symfony\Component\Mime\MimeTypes;

class ExtensionRule extends MediaItemRule
{
    protected array $allowedExtensions;

    /** @var string|array */
    public function __construct($allowedExtensions)
    {
        $this->allowedExtensions = Arr::wrap($allowedExtensions);
    }

    public function validateMediaItem(): bool
    {
        if (! $media = $this->getTemporaryUploadMedia()) {
            return true;
        }

        if (empty($media->mime_type)) {
            $extension = pathinfo($media->file_name, PATHINFO_EXTENSION);

            return in_array($extension, $this->allowedExtensions);
        }

        $actualExtensions = (new MimeTypes())->getExtensions($media->mime_type);

        return count(array_intersect($actualExtensions, $this->allowedExtensions)) > 0;
    }

    public function message()
    {
        return __('media::validation.extension', [
            'extensions' => implode(', ', $this->allowedExtensions),
        ]);
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Media\Rules\ItemRules;

use Illuminate\Support\Arr;
use Symfony\Component\Mime\MimeTypes;

class ExtensionRule extends MediaItemRule
{
    protected array $allowedExtensions;

    /** @var string|array */
    public function __construct($allowedExtensions)
    {
        $this->allowedExtensions = Arr::wrap($allowedExtensions);
    }

    public function validateMediaItem(): bool
    {
        if (! $media = $this->getTemporaryUploadMedia()) {
            return true;
        }

        if (empty($media->mime_type)) {
            $extension = pathinfo($media->file_name, PATHINFO_EXTENSION);

            return in_array($extension, $this->allowedExtensions);
        }

        $actualExtensions = (new MimeTypes)->getExtensions($media->mime_type);

        return count(array_intersect($actualExtensions, $this->allowedExtensions)) > 0;
    }

    public function message()
    {
        return __('media::validation.extension', [
            'extensions' => implode(', ', $this->allowedExtensions),
        ]);
    }
}
>>>>>>> a3a7396af796524a496143c651cbef32b21962d2
