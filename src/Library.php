<?php

/**
 * This file is part of ffi-sdl package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Serafim\SDL;

use Serafim\Version\Version as VersionInstance;
use Serafim\Version\VersionInterface;
use Serafim\FFILoader\Library as BaseLibrary;

/**
 * @psalm-type SDLVersion = object { major: int, minor: int, patch: int }
 */
final class Library extends BaseLibrary
{
    /**
     * @var string
     */
    public const DIRECTIVE_SDL_NO_PROTOTYPES = 'SDL_NO_PROTOTYPES';

    /**
     * @var string
     */
    private const BINARY_WIN64 = __DIR__ . '/../resources/bin/x64/SDL2.dll';

    /**
     * @var string
     */
    private const BINARY_WIN86 = __DIR__ . '/../resources/bin/x86/SDL2.dll';

    /**
     * @var string
     */
    private const BINARY_LINUX = 'libSDL2-2.0.so.0';

    /**
     * @var string
     */
    private const BINARY_DARWIN = 'libSDL2-2.0.0.dylib';

    /**
     * @var string
     */
    private const SDL_INCLUDE_DIR = __DIR__ . '/../resources/include';

    /**
     * @var string
     * @lang C
     */
    private const SDL_GET_VERSION = <<<'clang'
        typedef struct SDL_Version
        {
            uint8_t major;
            uint8_t minor;
            uint8_t patch;
        } SDL_Version;

        void SDL_GetVersion(SDL_Version * ver);
    clang;

    /**
     * @var VersionInterface|null
     */
    private ?VersionInterface $version;

    /**
     * @param VersionInterface|null $version
     */
    public function __construct(VersionInterface $version = null)
    {
        $this->version = $version;
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        return 'sdl';
    }

    /**
     * @return \SplFileInfo
     */
    public function getHeaders(): \SplFileInfo
    {
        return new \SplFileInfo(self::SDL_INCLUDE_DIR . '/sdl.h');
    }

    /**
     * @return VersionInterface
     */
    public function getVersion(): VersionInterface
    {
        return $this->version ??= $this->detectVersion($this->getBinary());
    }

    /**
     * {@inheritDoc}
     */
    public function getBinary(): string
    {
        switch (\PHP_OS_FAMILY) {
            case 'Windows':
                return \PHP_INT_SIZE === 8 ? self::BINARY_WIN64 : self::BINARY_WIN86;

            case 'Linux':
                return self::BINARY_LINUX;

            case 'Darwin':
                return self::BINARY_DARWIN;

            default:
                throw new \LogicException('Can not load SDL library on your OS');
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getDirectives(): iterable
    {
        yield 'SDL_PREREQ' => function ($major, $minor, $patch): string {
            $needle = new VersionInstance((int)$major, (int)$minor, (int)$patch);

            return $this->getVersion()->gte($needle) ? '1' : '0';
        };
    }

    /**
     * @param string $binary
     * @return VersionInterface
     */
    private function detectVersion(string $binary): VersionInterface
    {
        /** @var object $ctx */
        $ctx = \FFI::cdef(self::SDL_GET_VERSION, $binary);

        /** @psalm-var SDLVersion $version */
        $version = $ctx->new('SDL_Version');

        $ctx->SDL_GetVersion(\FFI::addr($version));

        return new VersionInstance(
            $version->major,
            $version->minor,
            $version->patch
        );
    }

    /**
     * @return string
     */
    public function getSuggestion(): string
    {
        switch (\PHP_OS_FAMILY) {
            case 'Windows';
                return 'Please open issue on GitHub: https://github.com/SerafimArts/ffi-sdl/issues';

            case 'Linux':
                return ' Dependency installation required: "sudo apt install libsdl2-2.0-0 -y"';

            case 'Darwin':
                return 'Dependency installation required: "brew install sdl2"';
        }

        return parent::getSuggestion();
    }
}
