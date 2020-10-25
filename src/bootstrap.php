<?php

/**
 * This file is part of ffi-sdl package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Serafim\FFILoader\Loader;
use Serafim\SDL\Library;
use Serafim\SDL\SDL;

Loader::onLoad([SDL::class], static function (): void {
    $library = new Library();

    [SDL::$ffi, SDL::$version] = [Loader::load($library), $library->getVersion()];
});


