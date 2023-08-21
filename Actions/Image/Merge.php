<<<<<<< HEAD
<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

use Intervention\Image\Facades\Image;
use Spatie\QueueableAction\QueueableAction;

class Merge
{
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
    }

    public function execute(array $filenames, string $filenameOut): void
    {
        $width = 0;
        $height = 0;
        $imgs = [];
        foreach ($filenames as $filename) {
            $img = Image::make(public_path($filename));
            $imgs[] = $img;
            $width += $img->width();
            $height = max($height, $img->height());
        }

        if (! is_numeric($width) || ! is_numeric($height)) {
            throw new \Exception('['.__LINE__.']['.class_basename(__CLASS__).']');
        }

        $width = (int) $width;
        $height = (int) $height;
        $img_canvas = Image::canvas($width, $height);
        $delta = 0;
        foreach ($imgs as $v) {
            $img_canvas->insert($v, 'top-left ', $delta, 0);
            $delta += $v->width();
        }

        $img_canvas->save(public_path().'/'.$filenameOut, 100);
    }
}
=======
<?php

/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */

declare(strict_types=1);

namespace Modules\Media\Actions\Image;

use Exception;
use Intervention\Image\Facades\Image;
use Spatie\QueueableAction\QueueableAction;

class Merge
{
    use QueueableAction;

    /**
     * Create a new action instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Prepare the action for execution, leveraging constructor injection.
    }

    public function execute(array $filenames, string $filenameOut): void
    {
        $width = 0;
        $height = 0;
        $imgs = [];
        foreach ($filenames as $filename) {
            $img = Image::make(public_path($filename));
            $imgs[] = $img;
            $width += $img->width();
            $height = max($height, $img->height());
        }

        if (! is_numeric($width) || ! is_numeric($height)) {
            throw new Exception('[' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
        }

        $width = (int) $width;
        $height = (int) $height;
        $img_canvas = Image::canvas($width, $height);
        $delta = 0;
        foreach ($imgs as $v) {
            $img_canvas->insert($v, 'top-left ', $delta, 0);
            $delta += $v->width();
        }

        $img_canvas->save(public_path() . '/' . $filenameOut, 100);
    }
}
>>>>>>> a3a7396af796524a496143c651cbef32b21962d2
