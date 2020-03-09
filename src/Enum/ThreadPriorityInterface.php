<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL\Enum;

/**
 * Interface ThreadPriorityInterface
 */
interface ThreadPriorityInterface
{
    public const SDL_THREAD_PRIORITY_LOW = 0;
    public const SDL_THREAD_PRIORITY_NORMAL = 1;
    public const SDL_THREAD_PRIORITY_HIGH = 2;
    public const SDL_THREAD_PRIORITY_TIME_CRITICAL = 3;
}