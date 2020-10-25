<?php

/**
 * This file is part of ffi-sdl package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Composer\Autoload\ClassLoader;
use Serafim\FFILoader\Loader;
use Serafim\SDL\Library;
use Serafim\SDL\SDL;

$composer = (static function (): ClassLoader {
    $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 5) ?? [];

    while ($trace) {
        $current = array_shift($trace);

        if (\strpos($current['class'] ?? '', 'ComposerAutoloaderInit') === 0) {
            return $current['class']::getLoader();
        }
    }

    throw new LogicException('File ' . __FILE__ . ' MUST be loaded though composer');
})();

spl_autoload_register(static function (string $class) use ($composer) {
    if ($class === SDL::class) {
        $composer->loadClass($class);

        $library = new Library();

        SDL::load(Loader::load($library), $library->getVersion());
    }
}, true, true);

unset($composer);


