# FFI SDL Bindings

> Note: This package has been archived, please use https://github.com/BicEngine/SDL instead


This is a SDL bindings for PHP

- [System Requirements](#requirements)
- [Installation](#installation)
    - [Linux](#linux)
    - [MacOS](#macos)
    - [Windows](#windows)
- [Extensions](#extensions)
- [Documentation](#documentation)
- [Example](#example)

## Requirements

- PHP >= 7.4
- ext-ffi
- Windows, Linux or MacOS 
    - Android, iOS, BSD or something else are not supported yet
- SDL >= 2.0

## Installation

Library is available as composer repository and can be 
installed using the following command in a root of your project.

```bash
$ composer require serafim/ffi-sdl
```

#### Linux

- `sudo apt install libsdl2-2.0-0 -y`

#### MacOS

- `brew install sdl2`

#### Windows

- SDL (2.0.12) binaries are already bundled

## Extensions

- [SDL Image](https://github.com/SerafimArts/ffi-sdl-image)
- [SDL TTF](https://github.com/SerafimArts/ffi-sdl-ttf)

## Documentation

The library API completely supports and repeats the analogue in the C language.

- [SDL2 official documentation](https://wiki.libsdl.org/FrontPage)

#### Notes

- API not yet fully documented and may not work in places.
- Low level system functions (such as `SDL_malloc` or `SDL_memcpy`) have been removed.

## Usage

```php
use Serafim\SDL\SDL;
use Serafim\SDL\Event;
use Serafim\SDL\Kernel\Event\Type;

SDL::init(SDL::SDL_INIT_VIDEO);

$window = SDL::createWindow( 
    'An SDL2 window',
    SDL::SDL_WINDOWPOS_UNDEFINED,
    SDL::SDL_WINDOWPOS_UNDEFINED, 
    640,
    480,
    SDL::SDL_WINDOW_OPENGL
);

if ($window === null) {
    throw new \Exception(sprintf('Could not create window: %s', SDL::getError()));
}

$event = SDL::new(Event::class);
$running = true;

while ($running) {
    SDL::pollEvent(ptr($event));
    
    if ($event->type === Type::SDL_QUIT) {
        $running = false;
    }
}

SDL::destroyWindow($window);
SDL::quit();
```

## Upgrade Guide

### Upgrading To 2.x From 1.x

1) The old format was to create an SDL object to access library methods. This is no longer required in the new 
version of the library.
2) All method prefixes `SDL_` have been removed.
3) All methods now compatible with the `PSR` specification and start with a small letter.

```php
// Before: serafim/ffi-sdl ^1.x

$sdl = new SDL();
$sdl->SDL_Init();

$window = $sdl->SDL_CreateWindow(...);
```

```php
// After: serafim/ffi-sdl ^2.x

SDL::init();

$window = SDL::createWindow(...);
```
