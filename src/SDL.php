<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use Serafim\SDL\Compiler\LibraryInterface;
use Serafim\SDL\Compiler\SDLLibrary;
use Serafim\SDL\Kernel\Defines;
use Serafim\SDL\Kernel\Enums;

/**
 * @mixin \FFI
 * @mixin SDLMethods
 */
final class SDL extends Library implements Defines, Enums
{
    /**
     * Note: PHPStorm meta bugfix
     *
     * {@inheritDoc}
     */
    public function new($type, bool $owned = true, bool $persistent = false): CData
    {
        return parent::new($type, $owned, $persistent);
    }

    /**
     * Note: PHPStorm meta bugfix
     *
     * {@inheritDoc}
     */
    public static function addr(CData $type): CData
    {
        return parent::addr($type);
    }

    /**
     * @return \FFI
     * @throws \RuntimeException
     */
    protected function create(): \FFI
    {
        $lib = new SDLLibrary();

        return $lib->inDirectory(static function (LibraryInterface $lib) {
            return \FFI::cdef(\file_get_contents($lib->getHeaders()), $lib->getLibrary());
        });
    }
}
