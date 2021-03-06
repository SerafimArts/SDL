<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Kernel\Mouse;

/**
 * Interface SystemCursorInterface
 */
interface SystemCursor
{
    public const SDL_SYSTEM_CURSOR_ARROW     = 0;
    public const SDL_SYSTEM_CURSOR_IBEAM     = 1;
    public const SDL_SYSTEM_CURSOR_WAIT      = 2;
    public const SDL_SYSTEM_CURSOR_CROSSHAIR = 3;
    public const SDL_SYSTEM_CURSOR_WAITARROW = 4;
    public const SDL_SYSTEM_CURSOR_SIZENWSE  = 5;
    public const SDL_SYSTEM_CURSOR_SIZENESW  = 6;
    public const SDL_SYSTEM_CURSOR_SIZEWE    = 7;
    public const SDL_SYSTEM_CURSOR_SIZENS    = 8;
    public const SDL_SYSTEM_CURSOR_SIZEALL   = 9;
    public const SDL_SYSTEM_CURSOR_NO        = 10;
    public const SDL_SYSTEM_CURSOR_HAND      = 11;
    public const SDL_NUM_SYSTEM_CURSORS      = 12;
}
