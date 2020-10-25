<?php

/**
 * This file is part of SDL package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @noinspection StaticInvocationViaThisInspection
 */

declare(strict_types=1);

namespace Serafim\SDL;

use FFI\CData;
use Serafim\SDL\Kernel\Enums;
use Serafim\Version\VersionInterface;

final class SDL implements Enums
{
    /**
     * @var string[]
     */
    private const METHOD_MAPPINGS = [
        // OpenGL
        'glCreateContext'                 => 'SDL_GL_CreateContext',
        'glDeleteContext'                 => 'SDL_GL_DeleteContext',
        'glExtensionSupported'            => 'SDL_GL_ExtensionSupported',
        'glGetAttribute'                  => 'SDL_GL_GetAttribute',
        'glGetCurrentContext'             => 'SDL_GL_GetCurrentContext',
        'glGetCurrentWindow'              => 'SDL_GL_GetCurrentWindow',
        'glGetDrawableSize'               => 'SDL_GL_GetDrawableSize',
        'glGetProcAddress'                => 'SDL_GL_GetProcAddress',
        'glGetSwapInterval'               => 'SDL_GL_GetSwapInterval',
        'glLoadLibrary'                   => 'SDL_GL_LoadLibrary',
        'glMakeCurrent'                   => 'SDL_GL_MakeCurrent',
        'glResetAttributes'               => 'SDL_GL_ResetAttributes',
        'glSetAttribute'                  => 'SDL_GL_SetAttribute',
        'glSetSwapInterval'               => 'SDL_GL_SetSwapInterval',
        'glSwapWindow'                    => 'SDL_GL_SwapWindow',
        'glUnbindTexture'                 => 'SDL_GL_UnbindTexture',
        'glUnloadLibrary'                 => 'SDL_GL_UnloadLibrary',

        // TLS
        'tlsCreate'                       => 'SDL_TLSCreate',
        'tlsGet'                          => 'SDL_TLSGet',
        'tlsSet'                          => 'SDL_TLSSet',

        // SIMD
        'simdAlloc'                       => 'SDL_SIMDAlloc',
        'simdFree'                        => 'SDL_SIMDFree',
        'simdGetAlignment'                => 'SDL_SIMDGetAlignment',

        // RW
        'loadFileRw'                      => 'SDL_LoadFile_RW',
        'freeRw'                          => 'SDL_FreeRW',
        'freeWav'                         => 'SDL_FreeWAV',
        'loadWavRw'                       => 'SDL_LoadWAV_RW',
        'loadBmpRw'                       => 'SDL_LoadBMP_RW',
        'saveBmpRw'                       => 'SDL_SaveBMP_RW',
        'rwFromConstMem'                  => 'SDL_RWFromConstMem',
        'rwFromFP'                        => 'SDL_RWFromFP',
        'rwFromFile'                      => 'SDL_RWFromFile',
        'rwFromMem'                       => 'SDL_RWFromMem',
        'rwClose'                         => 'SDL_RWclose',
        'rwRead'                          => 'SDL_RWread',
        'rwSeek'                          => 'SDL_RWseek',
        'rwSize'                          => 'SDL_RWsize',
        'rwTell'                          => 'SDL_RWtell',
        'rwWrite'                         => 'SDL_RWwrite',
        'allocRw'                         => 'SDL_AllocRW',
        'gameControllerAddMappingsFromRw' => 'SDL_GameControllerAddMappingsFromRW',

        // Metal
        'metalCreateView'                 => 'SDL_Metal_CreateView',
        'metalDestroyView'                => 'SDL_Metal_DestroyView',
    ];

    /**
     * @var string
     */
    private const STRUCT_PREFIX = 'SDL_';

    /**
     * @var \FFI|object
     */
    private static \FFI $ffi;

    /**
     * @var VersionInterface
     */
    private static VersionInterface $version;

    /**
     * The SDL's constructor should always be private to prevent direct
     * construction calls with the `new` operator.
     */
    private function __construct()
    {
    }

    /**
     * @param \FFI $ffi
     * @param VersionInterface $version
     */
    public static function load(\FFI $ffi, VersionInterface $version): void
    {
        [self::$ffi, self::$version] = [$ffi, $version];
    }

    /**
     * @param string $type
     * @param bool $owned
     * @return CData
     */
    public static function new(string $type, bool $owned = true): CData
    {
        if (\class_exists($type)) {
            $type = self::STRUCT_PREFIX . self::classBaseName($type);
        }

        return self::$ffi->new($type, $owned);
    }

    /**
     * @param string $class
     * @return string
     */
    private static function classBaseName(string $class): string
    {
        $chunks = \explode('\\', $class);

        return \end($chunks);
    }

    /**
     * @param string $type
     * @param CData $ptr
     * @return CData
     */
    public static function cast(string $type, CData $ptr): CData
    {
        return self::$ffi->cast($type, $ptr);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $method = self::METHOD_MAPPINGS[$name] ?? self::STRUCT_PREFIX . \ucfirst($name);

        return self::$ffi->$method(...$arguments);
    }

    /**
     * SDL should not be restorable from strings.
     */
    public function __wakeup()
    {
        throw new \LogicException('Cannot unserialize a static class');
    }

    /**
     * SDL should not be cloneable.
     */
    private function __clone()
    {
    }
}
