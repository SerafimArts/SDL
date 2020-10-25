<?php

namespace PHPSTORM_META {
    override(\ptr(), map(['' => '@Ptr']));
}

namespace Serafim\SDL {

    /**
     * @formatter:off
     * @method static void addEventWatch(EventFilterPtr $filter, CPtr $userdata)
     * @method static void addHintCallback(string $name, int $callback, CPtr $userdata)
     * @method static int addTimer(int $interval, \Closure $callback, CPtr $param)
     * @method static PixelFormatPtr allocFormat(int $pixelFormat)
     * @method static PalettePtr allocPalette(int $ncolors)
     * @method static RWopsPtr allocRw()
     * @method static int atomicAdd(AtomicTPtr $a, int $v)
     * @method static int atomicCAS(AtomicTPtr|CPtr $a, int $oldval, int $newval)
     * @method static int atomicCASPtr(CPtrPtr $a, CPtr $oldval, CPtr $newval)
     * @method static int atomicGet(AtomicTPtr $a)
     * @method static void atomicGetPtr(CPtrPtr $a)
     * @method static void atomicLock(int|CIntPtr $lock)
     * @method static int atomicSet(AtomicTPtr $a, int $v)
     * @method static void atomicSetPtr(CPtrPtr $a, CPtr $v)
     * @method static int atomicTryLock(int|CIntPtr $lock)
     * @method static void atomicUnlock(int|CIntPtr $lock)
     * @method static int audioInit(string $driverName)
     * @method static void audioQuit()
     * @method static int audioStreamAvailable(AudioStreamPtr $stream)
     * @method static void audioStreamClear(AudioStreamPtr $stream)
     * @method static int audioStreamFlush(AudioStreamPtr $stream)
     * @method static int audioStreamGet(AudioStreamPtr $stream, CPtr $buf, int $len)
     * @method static int audioStreamPut(AudioStreamPtr $stream, CPtr $buf, int $len)
     * @method static int buildAudioCVT(AudioCVTPtr $cvt, int|int $srcFormat, int $srcChannels, int $srcRate, int|int $dstFormat, int $dstChannels, int $dstRate)
     * @method static void calculateGammaRamp(float $gamma, int $ramp)
     * @method static int captureMouse(int $enabled)
     * @method static void clearError()
     * @method static void clearHints()
     * @method static void clearQueuedAudio(int|CIntPtr $dev)
     * @method static void closeAudio()
     * @method static void closeAudioDevice(int|CIntPtr $dev)
     * @method static int|CIntPtr composeCustomBlendMode(int|CIntPtr $srcColorFactor, int|CIntPtr $dstColorFactor, int|CIntPtr $colorOperation, int|CIntPtr $srcAlphaFactor, int|CIntPtr $dstAlphaFactor, int|CIntPtr $alphaOperation)
     * @method static int condBroadcast(condPtr $cond)
     * @method static int condSignal(condPtr $cond)
     * @method static int condWait(condPtr $cond, MutexPtr $mutex)
     * @method static int condWaitTimeout(condPtr $cond, MutexPtr $mutex, int $ms)
     * @method static int convertAudio(AudioCVTPtr $cvt)
     * @method static int convertPixels(int $width, int $height, int $srcFormat, CPtr $src, int $srcPitch, int $dstFormat, CPtr $dst, int $dstPitch)
     * @method static SurfacePtr convertSurface(SurfacePtr $src, PixelFormatPtr $fmt, ?int $flags)
     * @method static SurfacePtr convertSurfaceFormat(SurfacePtr $src, int $pixelFormat, int $flags)
     * @method static CursorPtr createColorCursor(SurfacePtr $surface, int $hotX, int $hotY)
     * @method static CondPtr createCond()
     * @method static CursorPtr createCursor(int $data, int $mask, int $w, int $h, int $hotX, int $hotY)
     * @method static MutexPtr createMutex()
     * @method static SurfacePtr createRGBSurface(int $flags, int $width, int $height, int $depth, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method static SurfacePtr createRGBSurfaceFrom(CPtr $pixels, int $width, int $height, int $depth, int $pitch, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method static SurfacePtr createRGBSurfaceWithFormat(int $flags, int $width, int $height, int $depth, int $format)
     * @method static SurfacePtr createRGBSurfaceWithFormatFrom(CPtr $pixels, int $width, int $height, int $depth, int $pitch, int $format)
     * @method static RendererPtr createRenderer(WindowPtr $window, int $index, int $flags)
     * @method static SemaphorePtr createSemaphore(int $initialValue)
     * @method static WindowPtr createShapedWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
     * @method static RendererPtr createSoftwareRenderer(SurfacePtr $surface)
     * @method static CursorPtr createSystemCursor(int|CIntPtr $id)
     * @method static TexturePtr createTexture(RendererPtr $renderer, int $format, int $access, int $w, int $h)
     * @method static TexturePtr createTextureFromSurface(RendererPtr $renderer, SurfacePtr $surface)
     * @method static ThreadPtr createThread(\Closure $fn, string|CCharPtr $name, CPtr $data, \Closure $pfnBeginThread, \Closure $pfnEndThread)
     * @method static ThreadPtr createThreadWithStackSize(\Closure $fn, string|CCharPtr $name, int $stacksize, CPtr $data, \Closure $pfnBeginThread, \Closure $pfnEndThread)
     * @method static WindowPtr createWindow(string $title, int $x, int $y, int $w, int $h, int $flags)
     * @method static int createWindowAndRenderer(int $width, int $height, int $windowFlags, WindowPtrPtr $window, RendererPtrPtr $renderer)
     * @method static WindowPtr createWindowFrom(CPtr $data)
     * @method static int DXGIGetOutputInfo(int $displayIndex, CIntPtr $adapterIndex, CIntPtr $outputIndex)
     * @method static void delEventWatch(EventFilterPtr $filter, CPtr $userdata)
     * @method static void delHintCallback(string $name, int $callback, CPtr $userdata)
     * @method static void delay(int $ms)
     * @method static int dequeueAudio(int|CIntPtr $dev, CPtr $data, int $len)
     * @method static void destroyCond(condPtr $cond)
     * @method static void destroyMutex(mutexPtr $mutex)
     * @method static void destroyRenderer(RendererPtr $renderer)
     * @method static void destroySemaphore(SemaphorePtr $sem)
     * @method static void destroyTexture(TexturePtr $texture)
     * @method static void destroyWindow(WindowPtr $window)
     * @method static void detachThread(ThreadPtr $thread)
     * @method static int direct3D9GetAdapterIndex(int $displayIndex)
     * @method static void disableScreenSaver()
     * @method static SurfacePtr duplicateSurface(SurfacePtr $surface)
     * @method static void enableScreenSaver()
     * @method static int enclosePoints(int $points, int $count, RectPtr $clip, RectPtr $result)
     * @method static int error(int|CIntPtr $code)
     * @method static int eventState(int $type, int $state)
     * @method static int fillRect(SurfacePtr $dst, RectPtr $rect, int $color)
     * @method static int fillRects(SurfacePtr $dst, RectPtr $rects, int $count, int $color)
     * @method static void filterEvents(EventFilterPtr $filter, CPtr $userdata)
     * @method static void flushEvent(int $type)
     * @method static void flushEvents(int $minType, int $maxType)
     * @method static void freeAudioStream(AudioStreamPtr $stream)
     * @method static void freeCursor(CursorPtr $cursor)
     * @method static void freeFormat(PixelFormatPtr $format)
     * @method static void freePalette(PalettePtr $palette)
     * @method static void freeRw(RWopsPtr $area)
     * @method static void freeSurface(SurfacePtr $surface)
     * @method static void freeWav(int $audioBuf)
     * @method static GLContext glCreateContext(WindowPtr $window)
     * @method static void glDeleteContext(GLContext $context)
     * @method static int glExtensionSupported(string $extension)
     * @method static int glGetAttribute(int $attr, CIntPtr $value)
     * @method static GLContext glGetCurrentContext()
     * @method static WindowPtr glGetCurrentWindow()
     * @method static void glGetDrawableSize(WindowPtr $window, CIntPtr $w, CIntPtr $h)
     * @method static CPtr glGetProcAddress(string $proc)
     * @method static int glGetSwapInterval()
     * @method static int glLoadLibrary(?string $path)
     * @method static int glMakeCurrent(WindowPtr $window, GLContext $context)
     * @method static void glResetAttributes()
     * @method static int glSetAttribute(int $attr, int $value)
     * @method static int glSetSwapInterval(int $interval)
     * @method static void glSwapWindow(WindowPtr $window)
     * @method static int glUnbindTexture(TexturePtr $texture)
     * @method static void glUnloadLibrary()
     * @method static int gameControllerAddMapping(string $mappingString)
     * @method static int gameControllerAddMappingsFromRw(RWopsPtr $rw, int $freerw)
     * @method static void gameControllerClose(GameControllerPtr $gameController)
     * @method static int gameControllerEventState(int $state)
     * @method static GameControllerPtr gameControllerFromInstanceID(int|CIntPtr $joyid)
     * @method static GameControllerPtr gameControllerFromPlayerIndex(int $playerIndex)
     * @method static void gameControllerSetPlayerIndex(GameControllerPtr $gameController, int $playerIndex)
     * @method static int gameControllerGetAttached(GameControllerPtr $gameController)
     * @method static int gameControllerGetAxis(GameControllerPtr $gameController, int|CIntPtr $axis)
     * @method static int|CIntPtr gameControllerGetAxisFromString(string $pchString)
     * @method static GameControllerButtonBind gameControllerGetBindForAxis(GameControllerPtr $gameController, int|CIntPtr $axis)
     * @method static GameControllerButtonBind gameControllerGetBindForButton(GameControllerPtr $gameController, int|CIntPtr $button)
     * @method static int gameControllerGetButton(GameControllerPtr $gameController, int|CIntPtr $button)
     * @method static int|CIntPtr gameControllerGetButtonFromString(string $pchString)
     * @method static JoystickPtr gameControllerGetJoystick(GameControllerPtr $gameController)
     * @method static int gameControllerGetPlayerIndex(GameControllerPtr $gameController)
     * @method static int gameControllerGetProduct(GameControllerPtr $gameController)
     * @method static int gameControllerGetProductVersion(GameControllerPtr $gameController)
     * @method static string gameControllerGetStringForAxis(int|CIntPtr $axis)
     * @method static string gameControllerGetStringForButton(int|CIntPtr $button)
     * @method static int gameControllerGetVendor(GameControllerPtr $gameController)
     * @method static string gameControllerMapping(GameControllerPtr $gameController)
     * @method static string gameControllerMappingForDeviceIndex(int $joystickIndex)
     * @method static string gameControllerMappingForGUID(JoystickGUID $guid)
     * @method static string gameControllerMappingForIndex(int $mappingIndex)
     * @method static string gameControllerName(GameControllerPtr $gameController)
     * @method static string gameControllerNameForIndex(int $joystickIndex)
     * @method static int gameControllerNumMappings()
     * @method static GameControllerPtr gameControllerOpen(int $joystickIndex)
     * @method static int gameControllerRumble(GameControllerPtr $gameController, int $lowFrequencyRumble, int $highFrequencyRumble, int $duration)
     * @method static void gameControllerUpdate()
     * @method static int gameControllerTypeForIndex(int $joystickIndex)
     * @method static int gameControllerGetType(GameControllerPtr $gameController)
     * @method static CData getAssertionHandler(CPtrPtr $userData)
     * @method static AssertDataPtr getAssertionReport()
     * @method static string getAudioDeviceName(int $index, int $isCapture)
     * @method static int|CIntPtr getAudioDeviceStatus(int|CIntPtr $dev)
     * @method static string getAudioDriver(int $index)
     * @method static int|CIntPtr getAudioStatus()
     * @method static string getBasePath()
     * @method static int getCPUCacheLineSize()
     * @method static int getCPUCount()
     * @method static void getClipRect(SurfacePtr $surface, RectPtr $rect)
     * @method static string getClipboardText()
     * @method static DisplayModePtr|CData getClosestDisplayMode(int $displayIndex, DisplayModePtr $mode, DisplayModePtr $closest)
     * @method static int getColorKey(SurfacePtr $surface, int $key)
     * @method static string getCurrentAudioDriver()
     * @method static int getCurrentDisplayMode(int $displayIndex, DisplayModePtr $mode)
     * @method static string getCurrentVideoDriver()
     * @method static CursorPtr getCursor()
     * @method static CData getDefaultAssertionHandler()
     * @method static CursorPtr getDefaultCursor()
     * @method static int getDesktopDisplayMode(int $displayIndex, DisplayModePtr $mode)
     * @method static int getDisplayBounds(int $displayIndex, RectPtr $rect)
     * @method static int getDisplayDPI(int $displayIndex, float $ddpi, float $hdpi, float $vdpi)
     * @method static int getDisplayMode(int $displayIndex, int $modeIndex, DisplayModePtr $mode)
     * @method static string getDisplayName(int $displayIndex)
     * @method static int|CIntPtr getDisplayOrientation(int $displayIndex)
     * @method static int getDisplayUsableBounds(int $displayIndex, RectPtr $rect)
     * @method static string|CCharPtr getError()
     * @method static int getEventFilter(EventFilterPtr $filter, CPtrPtr $userdata)
     * @method static int getGlobalMouseState(int $x, int $y)
     * @method static WindowPtr getGrabbedWindow()
     * @method static string getHint(string $name)
     * @method static int getHintBoolean(string $name, int $defaultValue)
     * @method static int|CIntPtr getKeyFromName(string $name)
     * @method static int|CIntPtr getKeyFromScancode(int|CIntPtr $scancode)
     * @method static string getKeyName(int|CIntPtr $key)
     * @method static WindowPtr getKeyboardFocus()
     * @method static int getKeyboardState(int $numkeys)
     * @method static int|CIntPtr getModState()
     * @method static WindowPtr getMouseFocus()
     * @method static int getMouseState(int $x, int $y)
     * @method static int getNumAllocations()
     * @method static int getNumAudioDevices(int $iscapture)
     * @method static int getNumAudioDrivers()
     * @method static int getNumDisplayModes(int $displayIndex)
     * @method static int getNumRenderDrivers()
     * @method static int getNumTouchDevices()
     * @method static int getNumTouchFingers(int|CIntPtr $touchID)
     * @method static int getNumVideoDisplays()
     * @method static int getNumVideoDrivers()
     * @method static int getPerformanceCounter()
     * @method static int getPerformanceFrequency()
     * @method static string getPixelFormatName(int $format)
     * @method static string getPlatform()
     * @method static int getPowerInfo(int $secs, int $pct)
     * @method static string getPrefPath(string $org, string $app)
     * @method static int getQueuedAudioSize(int|CIntPtr $dev)
     * @method static void getRGB(int $pixel, PixelFormatPtr $format, int $r, int $g, int $b)
     * @method static void getRGBA(int $pixel, PixelFormatPtr $format, int $r7, int $g, int $b, int $a)
     * @method static int getRelativeMouseMode()
     * @method static int getRelativeMouseState(int $x, int $y)
     * @method static int getRenderDrawBlendMode(RendererPtr $renderer, int|CIntPtr $blendMode)
     * @method static int getRenderDrawColor(RendererPtr $renderer, int $r, int $g, int $b, int $a)
     * @method static int getRenderDriverInfo(int $index, RendererInfoPtr $info)
     * @method static TexturePtr getRenderTarget(RendererPtr $renderer)
     * @method static RendererPtr getRenderer(WindowPtr $window)
     * @method static int getRendererInfo(RendererPtr $renderer, RendererInfoPtr $info)
     * @method static int getRendererOutputSize(RendererPtr $renderer, int $w, int $h)
     * @method static string getRevision()
     * @method static int getRevisionNumber()
     * @method static int|CIntPtr getScancodeFromKey(int|CIntPtr $key)
     * @method static int|CIntPtr getScancodeFromName(string $name)
     * @method static string getScancodeName(int|CIntPtr $scancode)
     * @method static int getShapedWindowMode(WindowPtr $window, WindowShapeModePtr $shapeMode)
     * @method static int getSurfaceAlphaMod(SurfacePtr $surface, int $alpha)
     * @method static int getSurfaceBlendMode(SurfacePtr $surface, int|CIntPtr $blendMode)
     * @method static int getSurfaceColorMod(SurfacePtr $surface, int $r, int $g, int $b)
     * @method static int getSystemRAM()
     * @method static int getTextureAlphaMod(TexturePtr $texture, int $alpha)
     * @method static int getTextureBlendMode(TexturePtr $texture, int|CIntPtr $blendMode)
     * @method static int getTextureColorMod(TexturePtr $texture, int $r, int $g, int $b)
     * @method static int getTextureScaleMode(TexturePtr $texture, CIntPtr $scaleMode)
     * @method static int getThreadID(ThreadPtr $thread)
     * @method static string|CCharPtr getThreadName(ThreadPtr $thread)
     * @method static int getTicks()
     * @method static int|CIntPtr getTouchDevice(int $index)
     * @method static int|CIntPtr getTouchDeviceType(int|CIntPtr $touchID)
     * @method static FingerPtr getTouchFinger(int|CIntPtr $touchID, int $index)
     * @method static void getVersion(VersionPtr $ver)
     * @method static string getVideoDriver(int $index)
     * @method static int getWindowBordersSize(WindowPtr $window, int $top, int $left, int $bottom, int $right)
     * @method static float getWindowBrightness(WindowPtr $window)
     * @method static void getWindowData(WindowPtr $window, string $name)
     * @method static int getWindowDisplayIndex(WindowPtr $window)
     * @method static int getWindowDisplayMode(WindowPtr $window, DisplayModePtr $mode)
     * @method static int getWindowFlags(WindowPtr $window)
     * @method static WindowPtr getWindowFromID(int $id)
     * @method static int getWindowGammaRamp(WindowPtr $window, int $red, int $green, int $blue)
     * @method static int getWindowGrab(WindowPtr $window)
     * @method static int getWindowID(WindowPtr $window)
     * @method static void getWindowMaximumSize(WindowPtr $window, int $w, int $h)
     * @method static void getWindowMinimumSize(WindowPtr $window, int $w, int $h)
     * @method static int getWindowOpacity(WindowPtr $window, float $outOpacity)
     * @method static int getWindowPixelFormat(WindowPtr $window)
     * @method static void getWindowPosition(WindowPtr $window, int $x, int $y)
     * @method static void getWindowSize(WindowPtr $window, CIntPtr $w, CIntPtr $h)
     * @method static SurfacePtr|Surface[] getWindowSurface(WindowPtr $window)
     * @method static string getWindowTitle(WindowPtr $window)
     * @method static int|CIntPtr getYUVConversionMode()
     * @method static int|CIntPtr getYUVConversionModeForResolution(int $width, int $height)
     * @method static void hapticClose(HapticPtr $haptic)
     * @method static void hapticDestroyEffect(HapticPtr $haptic, int $effect)
     * @method static int hapticEffectSupported(HapticPtr $haptic, HapticEffectPtr $effect)
     * @method static int hapticGetEffectStatus(HapticPtr $haptic, int $effect)
     * @method static int hapticIndex(HapticPtr $haptic)
     * @method static string hapticName(int $deviceIndex)
     * @method static int hapticNewEffect(HapticPtr $haptic, HapticEffectPtr $effect)
     * @method static int hapticNumAxes(HapticPtr $haptic)
     * @method static int hapticNumEffects(HapticPtr $haptic)
     * @method static int hapticNumEffectsPlaying(HapticPtr $haptic)
     * @method static HapticPtr hapticOpen(int $deviceIndex)
     * @method static HapticPtr hapticOpenFromJoystick(JoystickPtr $joystick)
     * @method static HapticPtr hapticOpenFromMouse()
     * @method static int hapticOpened(int $deviceIndex)
     * @method static int hapticPause(HapticPtr $haptic)
     * @method static int hapticQuery(HapticPtr $haptic)
     * @method static int hapticRumbleInit(HapticPtr $haptic)
     * @method static int hapticRumblePlay(HapticPtr $haptic, float $strength, int $length)
     * @method static int hapticRumbleStop(HapticPtr $haptic)
     * @method static int hapticRumbleSupported(HapticPtr $haptic)
     * @method static int hapticRunEffect(HapticPtr $haptic, int $effect, int $iterations)
     * @method static int hapticSetAutocenter(HapticPtr $haptic, int $autocenter)
     * @method static int hapticSetGain(HapticPtr $haptic, int $gain)
     * @method static int hapticStopAll(HapticPtr $haptic)
     * @method static int hapticStopEffect(HapticPtr $haptic, int $effect)
     * @method static int hapticUnpause(HapticPtr $haptic)
     * @method static int hapticUpdateEffect(HapticPtr $haptic, int $effect, HapticEffectPtr $data)
     * @method static int has3DNow()
     * @method static int hasARMSIMD()
     * @method static int hasAVX()
     * @method static int hasAVX2()
     * @method static int hasAVX512F()
     * @method static int hasAltiVec()
     * @method static int hasClipboardText()
     * @method static int hasColorKey(SurfacePtr $surface)
     * @method static int hasEvent(int $type)
     * @method static int hasEvents(int $minType, int $maxType)
     * @method static int hasIntersection(RectPtr $A, RectPtr $B)
     * @method static int hasMMX()
     * @method static int hasNEON()
     * @method static int hasRDTSC()
     * @method static int hasSSE()
     * @method static int hasSSE2()
     * @method static int hasSSE3()
     * @method static int hasSSE41()
     * @method static int hasSSE42()
     * @method static int hasScreenKeyboardSupport()
     * @method static void hideWindow(WindowPtr $window)
     * @method static int init(int $flags)
     * @method static int initSubSystem(int $flags)
     * @method static int intersectRect(RectPtr $A, RectPtr $B, RectPtr $result)
     * @method static int intersectRectAndLine(RectPtr $rect, int $x1, int $y1, int $x2, int $y2)
     * @method static int isGameController(int $joystickIndex)
     * @method static int isScreenKeyboardShown(WindowPtr $window)
     * @method static int isScreenSaverEnabled()
     * @method static int isShapedWindow(WindowPtr $window)
     * @method static int isTablet()
     * @method static int isTextInputActive()
     * @method static void joystickClose(JoystickPtr $joystick)
     * @method static int|CIntPtr joystickCurrentPowerLevel(JoystickPtr $joystick)
     * @method static int joystickEventState(int $state)
     * @method static JoystickPtr joystickFromInstanceID(int $joyId)
     * @method static JoystickPtr joystickFromPlayerIndex(int $playerIndex)
     * @method static void joystickSetPlayerIndex(JoystickPtr $joy, int $playerIndex)
     * @method static int joystickGetAttached(JoystickPtr $joystick)
     * @method static int joystickGetAxis(JoystickPtr $joystick, int $axis)
     * @method static int joystickGetAxisInitialState(JoystickPtr $joystick, int $axis, int $state)
     * @method static int joystickGetBall(JoystickPtr $joystick, int $ball, int $dx, int $dy)
     * @method static int joystickGetButton(JoystickPtr $joystick, int $button)
     * @method static JoystickGUID joystickGetDeviceGUID(int $deviceIndex)
     * @method static int|CIntPtr joystickGetDeviceInstanceID(int $deviceIndex)
     * @method static int joystickGetDevicePlayerIndex(int $deviceIndex)
     * @method static int joystickGetDeviceProduct(int $deviceIndex)
     * @method static int joystickGetDeviceProductVersion(int $deviceIndex)
     * @method static int|CIntPtr joystickGetDeviceType(int $deviceIndex)
     * @method static int joystickGetDeviceVendor(int $deviceIndex)
     * @method static JoystickGUID joystickGetGUID(JoystickPtr $joystick)
     * @method static JoystickGUID joystickGetGUIDFromString(string $pchGUID)
     * @method static void joystickGetGUIDString(JoystickGUID $guid, string $pszGUID, int $cbGUID)
     * @method static int joystickGetHat(JoystickPtr $joystick, int $hat)
     * @method static int joystickGetPlayerIndex(JoystickPtr $joystick)
     * @method static int joystickGetProduct(JoystickPtr $joystick)
     * @method static int joystickGetProductVersion(JoystickPtr $joystick)
     * @method static int|CIntPtr joystickGetType(JoystickPtr $joystick)
     * @method static int joystickGetVendor(JoystickPtr $joystick)
     * @method static int|CIntPtr joystickInstanceID(JoystickPtr $joystick)
     * @method static int joystickIsHaptic(JoystickPtr $joystick)
     * @method static string joystickName(JoystickPtr $joystick)
     * @method static string joystickNameForIndex(int $deviceIndex)
     * @method static int joystickNumAxes(JoystickPtr $joystick)
     * @method static int joystickNumBalls(JoystickPtr $joystick)
     * @method static int joystickNumButtons(JoystickPtr $joystick)
     * @method static int joystickNumHats(JoystickPtr $joystick)
     * @method static JoystickPtr joystickOpen(int $deviceIndex)
     * @method static int joystickRumble(JoystickPtr $joystick, int $lowFrequencyRumble, int $highFrequencyRumble, int $durationMs)
     * @method static void joystickUpdate()
     * @method static SurfacePtr loadBmpRw(RWopsPtr $src, int $freesrc)
     * @method static int loadDollarTemplates(int|CIntPtr $touchId, RWopsPtr $src)
     * @method static void loadFile(string $file, int $datasize)
     * @method static void loadFileRw(RWopsPtr $src, int $datasize, int $freesrc)
     * @method static void loadFunction(CPtr $handle, string $name)
     * @method static void loadObject(string $sofile)
     * @method static AudioSpecPtr loadWavRw(RWopsPtr $src, int $freesrc, AudioSpecPtr $spec, int|CIntPtrPtr $audioBuf, int|CIntPtr $audioLen)
     * @method static void lockAudio()
     * @method static void lockAudioDevice(int|CIntPtr $dev)
     * @method static void lockJoysticks()
     * @method static int lockMutex(mutexPtr $mutex)
     * @method static int lockSurface(SurfacePtr $surface)
     * @method static int lockTexture(TexturePtr $texture, RectPtr $rect, CPtrPtr $pixels, int $pitch)
     * @method static int lockTextureToSurface(TexturePtr $texture, RectPtr $rect, SurfacePtrPtr $surface)
     * @method static void log(string $fmt)
     * @method static void logCritical(int $category, string $fmt)
     * @method static void logDebug(int $category, string $fmt)
     * @method static void logError(int $category, string $fmt)
     * @method static void logGetOutputFunction(LogOutputFunctionPtr $callback, CPtrPtr $userdata)
     * @method static LogPriority logGetPriority(int $category)
     * @method static void logInfo(int $category, string $fmt)
     * @method static void logMessage(int $category, LogPriority $priority, string $fmt)
     * @method static void logMessageV(int $category, LogPriority $priority, string $fmt, object $ap)
     * @method static void logResetPriorities()
     * @method static void logSetAllPriority(LogPriority $priority)
     * @method static void logSetOutputFunction(LogOutputFunctionPtr $callback, CPtr $userdata)
     * @method static void logSetPriority(int $category, LogPriority $priority)
     * @method static void logVerbose(int $category, string $fmt)
     * @method static void logWarn(int $category, string $fmt)
     * @method static int lowerBlit(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
     * @method static int lowerBlitScaled(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
     * @method static int mapRGB(PixelFormatPtr $format, int $r, int $g, int $b)
     * @method static int mapRGBA(PixelFormatPtr $format, int $r, int $g, int $b, int $a)
     * @method static int masksToPixelFormatEnum(int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method static void maximizeWindow(WindowPtr $window)
     * @method static void memoryBarrierAcquireFunction()
     * @method static void memoryBarrierReleaseFunction()
     * @method static void minimizeWindow(WindowPtr $window)
     * @method static void mixAudio(int $dst, int $src, int $len, int $volume)
     * @method static void mixAudioFormat(int $dst, int $src, int|int $format, int $len, int $volume)
     * @method static int mouseIsHaptic()
     * @method static AudioStreamPtr newAudioStream(int|int $srcFormat, int $srcChannels, int $srcRate, int|int $dstFormat, int $dstChannels, int $dstRate)
     * @method static int numHaptics()
     * @method static int numJoysticks()
     * @method static int numSensors()
     * @method static int openAudio(AudioSpecPtr $desired, AudioSpecPtr $obtained)
     * @method static int|CIntPtr openAudioDevice(string $device, int $iscapture, AudioSpecPtr $desired, AudioSpecPtr $obtained, int $allowedChanges)
     * @method static void pauseAudio(int $pauseOn)
     * @method static void pauseAudioDevice(int|CIntPtr $dev, int $pauseOn)
     * @method static int peepEvents(EventPtr $events, int $numevents, int $action, int $minType, int $maxType)
     * @method static int pixelFormatEnumToMasks(int $format, int $bpp, int $Rmask, int $Gmask, int $Bmask, int $Amask)
     * @method static int pollEvent(EventPtr $event)
     * @method static void pumpEvents()
     * @method static int pushEvent(EventPtr $event)
     * @method static int queryTexture(TexturePtr $texture, int $format, int $access, int $w, int $h)
     * @method static int queueAudio(int|CIntPtr $dev, CPtr $data, int $len)
     * @method static void quit()
     * @method static void quitSubSystem(int $flags)
     * @method static RWopsPtr rwFromConstMem(CPtr $mem, int $size)
     * @method static RWopsPtr rwFromFP(CPtr $fp, int $autoclose)
     * @method static RWopsPtr rwFromFile(string|CCharPtr $file, string|CCharPtr $mode)
     * @method static RWopsPtr rwFromMem(CPtr $mem, int $size)
     * @method static int rwClose(RWopsPtr $context)
     * @method static int rwRead(RWopsPtr $context, CPtr $ptr, int $size, int $maxnum)
     * @method static int rwSeek(RWopsPtr $context, int $offset, int $whence)
     * @method static int rwSize(RWopsPtr $context)
     * @method static int rwTell(RWopsPtr $context)
     * @method static int rwWrite(RWopsPtr $context, CPtr $ptr, int $size, int $num)
     * @method static void raiseWindow(WindowPtr $window)
     * @method static int readBE16(RWopsPtr $src)
     * @method static int readBE32(RWopsPtr $src)
     * @method static int readBE64(RWopsPtr $src)
     * @method static int readLE16(RWopsPtr $src)
     * @method static int readLE32(RWopsPtr $src)
     * @method static int readLE64(RWopsPtr $src)
     * @method static int readU8(RWopsPtr $src)
     * @method static int recordGesture(int|CIntPtr $touchId)
     * @method static int registerApp(string|CCharPtr $name, int $style, $hInst)
     * @method static int registerEvents(int $numevents)
     * @method static int removeTimer(int $id)
     * @method static int renderClear(RendererPtr $renderer)
     * @method static int renderCopy(RendererPtr $renderer, TexturePtr $texture, RectPtr|null $srcrect, RectPtr|null $dstrect)
     * @method static int renderCopyEx(RendererPtr $renderer, TexturePtr $texture, RectPtr|null $srcrect, RectPtr|null $dstrect, float $angle, PointPtr|null $center, int $flip)
     * @method static int renderCopyExF(RendererPtr $renderer, TexturePtr $texture, RectPtr|null $srcrect, FRectPtr|null $dstrect, float $angle, PointPtr|null $center, int $flip)
     * @method static int renderCopyF(RendererPtr $renderer, TexturePtr $texture, RectPtr|null $srcrect, FRectPtr|null $dstrect)
     * @method static int renderDrawLine(RendererPtr $renderer, int $x1, int $y1, int $x2, int $y2)
     * @method static int renderDrawLineF(RendererPtr $renderer, float $x1, float $y1, float $x2, float $y2)
     * @method static int renderDrawLines(RendererPtr $renderer, int $points, int $count)
     * @method static int renderDrawLinesF(RendererPtr $renderer, int $points, int $count)
     * @method static int renderDrawPoint(RendererPtr $renderer, int $x, int $y)
     * @method static int renderDrawPointF(RendererPtr $renderer, float $x, float $y)
     * @method static int renderDrawPoints(RendererPtr $renderer, int $points, int $count)
     * @method static int renderDrawPointsF(RendererPtr $renderer, int $points, int $count)
     * @method static int renderDrawRect(RendererPtr $renderer, RectPtr $rect)
     * @method static int renderDrawRectF(RendererPtr $renderer, FRectPtr $rect)
     * @method static int renderDrawRects(RendererPtr $renderer, RectPtr $rects, int $count)
     * @method static int renderDrawRectsF(RendererPtr $renderer, FRectPtr $rects, int $count)
     * @method static int renderFillRect(RendererPtr $renderer, RectPtr $rect)
     * @method static int renderFillRectF(RendererPtr $renderer, FRectPtr $rect)
     * @method static int renderFillRects(RendererPtr $renderer, RectPtr $rects, int $count)
     * @method static int renderFillRectsF(RendererPtr $renderer, FRectPtr $rects, int $count)
     * @method static int renderFlush(RendererPtr $renderer)
     * @method static void renderGetClipRect(RendererPtr $renderer, RectPtr $rect)
     * @method static IDirect3DDevice9 renderGetD3D9Device(RendererPtr $renderer)
     * @method static int renderGetIntegerScale(RendererPtr $renderer)
     * @method static void renderGetLogicalSize(RendererPtr $renderer, int $w, int $h)
     * @method static void renderGetMetalCommandEncoder(RendererPtr $renderer)
     * @method static void renderGetMetalLayer(RendererPtr $renderer)
     * @method static void renderGetScale(RendererPtr $renderer, float $scaleX, float $scaleY)
     * @method static void renderGetViewport(RendererPtr $renderer, RectPtr $rect)
     * @method static int renderIsClipEnabled(RendererPtr $renderer)
     * @method static void renderPresent(RendererPtr $renderer)
     * @method static int renderReadPixels(RendererPtr $renderer, RectPtr $rect, int $format, CPtr $pixels, int $pitch)
     * @method static int renderSetClipRect(RendererPtr $renderer, RectPtr $rect)
     * @method static int renderSetIntegerScale(RendererPtr $renderer, int $enable)
     * @method static int renderSetLogicalSize(RendererPtr $renderer, int $w, int $h)
     * @method static int renderSetScale(RendererPtr $renderer, float $scaleX, float $scaleY)
     * @method static int renderSetViewport(RendererPtr $renderer, RectPtr $rect)
     * @method static int renderTargetSupported(RendererPtr $renderer)
     * @method static int reportAssertion(AssertDataPtr|CPtr $data, string|CCharPtr $func, string|CCharPtr $file, int $line)
     * @method static void resetAssertionReport()
     * @method static void restoreWindow(WindowPtr $window)
     * @method static void simdAlloc(int $len)
     * @method static void simdFree(CPtr $ptr)
     * @method static int simdGetAlignment()
     * @method static int saveAllDollarTemplates(RWopsPtr $dst)
     * @method static int saveBmpRw(SurfacePtr $surface, RWopsPtr $dst, int $freedst)
     * @method static int saveDollarTemplate(int|CIntPtr $gestureId, RWopsPtr $dst)
     * @method static int semPost(SemaphorePtr $sem)
     * @method static int semTryWait(SemaphorePtr $sem)
     * @method static int semValue(SemaphorePtr $sem)
     * @method static int semWait(SemaphorePtr $sem)
     * @method static int semWaitTimeout(SemaphorePtr $sem, int $ms)
     * @method static void sensorClose(SensorPtr $sensor)
     * @method static SensorPtr sensorFromInstanceID(int $instanceId)
     * @method static int sensorGetData(SensorPtr $sensor, float $data, int $numValues)
     * @method static int sensorGetDeviceInstanceID(int $deviceIndex)
     * @method static string sensorGetDeviceName(int $deviceIndex)
     * @method static int sensorGetDeviceNonPortableType(int $deviceIndex)
     * @method static int sensorGetDeviceType(int $deviceIndex)
     * @method static int sensorGetInstanceID(SensorPtr $sensor)
     * @method static string sensorGetName(SensorPtr $sensor)
     * @method static int sensorGetNonPortableType(SensorPtr $sensor)
     * @method static int sensorGetType(SensorPtr $sensor)
     * @method static SensorPtr sensorOpen(int $deviceIndex)
     * @method static void sensorUpdate()
     * @method static void setAssertionHandler(\Closure|CData $handler, CPtr $userdata)
     * @method static int setClipRect(SurfacePtr $surface, RectPtr $rect)
     * @method static int setClipboardText(string $text)
     * @method static int setColorKey(SurfacePtr $surface, int $flag, int $key)
     * @method static void setCursor(CursorPtr $cursor)
     * @method static int setError(string|CCharPtr $fmt)
     * @method static void setEventFilter(EventFilterPtr $filter, CPtr $userdata)
     * @method static int setHint(string $name, string $value)
     * @method static int setHintWithPriority(string $name, string $value, int $priority)
     * @method static void setMainReady()
     * @method static void setModState(int|CIntPtr $modstate)
     * @method static int setPaletteColors(PalettePtr $palette, ColorPtr $colors, int $firstcolor, int $ncolors)
     * @method static int setPixelFormatPalette(PixelFormatPtr $format, PalettePtr $palette)
     * @method static int setRelativeMouseMode(int $enabled)
     * @method static int setRenderDrawBlendMode(RendererPtr $renderer, int|CIntPtr $blendMode)
     * @method static int setRenderDrawColor(RendererPtr $renderer, int $r, int $g, int $b, int $a)
     * @method static int setRenderTarget(RendererPtr $renderer, TexturePtr $texture)
     * @method static int setSurfaceAlphaMod(SurfacePtr $surface, int $alpha)
     * @method static int setSurfaceBlendMode(SurfacePtr $surface, int|CIntPtr $blendMode)
     * @method static int setSurfaceColorMod(SurfacePtr $surface, int $r, int $g, int $b)
     * @method static int setSurfacePalette(SurfacePtr $surface, PalettePtr $palette)
     * @method static int setSurfaceRLE(SurfacePtr $surface, int $flag)
     * @method static void setTextInputRect(RectPtr $rect)
     * @method static int setTextureAlphaMod(TexturePtr $texture, float $alpha)
     * @method static int setTextureBlendMode(TexturePtr $texture, int|CIntPtr $blendMode)
     * @method static int setTextureColorMod(TexturePtr $texture, int $r, int $g, int $b)
     * @method static int setTextureScaleMode(TexturePtr $texture, int $scaleMode)
     * @method static int setThreadPriority(int $priority)
     * @method static void setWindowBordered(WindowPtr $window, int $bordered)
     * @method static int setWindowBrightness(WindowPtr $window, float $brightness)
     * @method static void setWindowData(WindowPtr $window, string $name, CPtr $userdata)
     * @method static int setWindowDisplayMode(WindowPtr $window, DisplayModePtr $mode)
     * @method static int setWindowFullscreen(WindowPtr $window, int $flags)
     * @method static int setWindowGammaRamp(WindowPtr $window, int $red, int $green, int $blue)
     * @method static void setWindowGrab(WindowPtr $window, int $grabbed)
     * @method static int setWindowHitTest(WindowPtr $window, \Closure|CData $callback, CPtr $callback_data)
     * @method static void setWindowIcon(WindowPtr $window, SurfacePtr $icon)
     * @method static int setWindowInputFocus(WindowPtr $window)
     * @method static void setWindowMaximumSize(WindowPtr $window, int $max_w, int $max_h)
     * @method static void setWindowMinimumSize(WindowPtr $window, int $min_w, int $min_h)
     * @method static int setWindowModalFor(WindowPtr $modal_window, WindowPtr $parent_window)
     * @method static int setWindowOpacity(WindowPtr $window, float $opacity)
     * @method static void setWindowPosition(WindowPtr $window, int $x, int $y)
     * @method static void setWindowResizable(WindowPtr $window, int $resizable)
     * @method static int setWindowShape(WindowPtr $window, SurfacePtr $shape, WindowShapeModePtr $shape_mode)
     * @method static void setWindowSize(WindowPtr $window, int $w, int $h)
     * @method static void setWindowTitle(WindowPtr $window, string $title)
     * @method static void setWindowsMessageHook(\Closure $callback, CPtr $userdata)
     * @method static void setYUVConversionMode(int|CIntPtr $mode)
     * @method static int showCursor(int $toggle)
     * @method static int showMessageBox(MessageBoxDataPtr $messageboxdata, int|CIntPtr $buttonid)
     * @method static int showSimpleMessageBox(int $flags, string|CData $title, string|CData $message, Window|CData|null $window)
     * @method static void showWindow(WindowPtr $window)
     * @method static int softStretch(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
     * @method static void startTextInput()
     * @method static void stopTextInput()
     * @method static int tlsCreate()
     * @method static CPtr tlsGet(int $id)
     * @method static int tlsSet(int $id, CPtr $value, \Closure $destructor)
     * @method static int threadID()
     * @method static int tryLockMutex(mutexPtr $mutex)
     * @method static void unionRect(RectPtr $A, RectPtr $B, RectPtr $result)
     * @method static void unloadObject(CPtr $handle)
     * @method static void unlockAudio()
     * @method static void unlockAudioDevice(int|CIntPtr $dev)
     * @method static void unlockJoysticks()
     * @method static int unlockMutex(mutexPtr $mutex)
     * @method static void unlockSurface(SurfacePtr $surface)
     * @method static void unlockTexture(TexturePtr $texture)
     * @method static void unregisterApp()
     * @method static int updateTexture(TexturePtr $texture, RectPtr $rect, CPtr $pixels, int $pitch)
     * @method static int updateWindowSurface(WindowPtr $window)
     * @method static int updateWindowSurfaceRects(WindowPtr $window, RectPtr $rects, int $numrects)
     * @method static int updateYUVTexture(TexturePtr $texture, RectPtr $rect, int $Yplane, int $Ypitch, int $Uplane, int $Upitch, int $Vplane, int $Vpitch)
     * @method static int upperBlit(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
     * @method static int upperBlitScaled(SurfacePtr $src, RectPtr $srcrect, SurfacePtr $dst, RectPtr $dstrect)
     * @method static int videoInit(string $driver_name)
     * @method static void videoQuit()
     * @method static int waitEvent(EventPtr $event)
     * @method static int waitEventTimeout(EventPtr $event, int $timeout)
     * @method static void waitThread(ThreadPtr $thread, int|CIntPtr $status)
     * @method static int warpMouseGlobal(int $x, int $y)
     * @method static void warpMouseInWindow(WindowPtr $window, int $x, int $y)
     * @method static int wasInit(int $flags)
     * @method static int writeBE16(RWopsPtr $dst, int $value)
     * @method static int writeBE32(RWopsPtr $dst, int $value)
     * @method static int writeBE64(RWopsPtr $dst, int $value)
     * @method static int writeLE16(RWopsPtr $dst, int $value)
     * @method static int writeLE32(RWopsPtr $dst, int $value)
     * @method static int writeLE64(RWopsPtr $dst, int $value)
     * @method static int writeU8(RWopsPtr $dst, int $value)
     * @method static MetalView metalCreateView(WindowPtr $window)
     * @method static void metalDestroyView(MetalView $view)
     * @method static int getAndroidSDKVersion()
     * @formatter:on
     */
    final class SDL {}

    use FFI\CData;
    use FFI\CIntPtr;
    use Serafim\SDL\Kernel\Keyboard\Key;
    use Serafim\SDL\Kernel\Keyboard\KeyMode;
    use Serafim\SDL\Kernel\Keyboard\ScanCode;

    /**
     * <code>
     *  struct assertData {
     *      int always_ignore;
     *      unsigned int trigger_count;
     *      const char* condition;
     *      const char* filename;
     *      int linenum;
     *      const char* function;
     *      const struct AssertData* next;
     *  }
     * </code>
     */
    final class AssertData extends CData
    {
        /**
         * @var int
         */
        public int $always_ignore;

        /**
         * @var int
         */
        public int $trigger_count;

        /**
         * @var string|CData
         */
        public CData $condition;

        /**
         * @var string|CData
         */
        public CData $filename;

        /**
         * @var int
         */
        public int $linenum;

        /**
         * @var string|CData
         */
        public string $function;

        /**
         * @var self|CData|null
         */
        public ?CData $next;
    }

    /**
     * A type representing an atomic integer value.
     * It is a struct so people don't accidentally use numeric operations on it.
     *
     * <code>
     *  typedef struct {
     *      int value;
     *  } AtomicT;
     * </code>
     */
    final class AtomicT extends CData
    {
        /**
         * The atomic integer value
         *
         * @var int
         */
        public int $value;
    }

    /**
     * The SDL mutex structure, defined in sysmutex.c
     *
     * TODO Finish the description of this structure
     *
     */
    final class Mutex extends CData
    {
    }

    /**
     * The SDL semaphore structure, defined in syssem.c
     *
     * TODO Finish the description of this structure
     *
     */
    final class Semaphore extends CData
    {
    }

    /**
     * The SDL condition variable structure, defined in syscond.c
     *
     * TODO Finish the description of this structure
     *
     */
    final class Cond extends CData
    {
    }

    /**
     * The SDL thread structure, defined in thread.c
     *
     * TODO Finish the description of this structure
     *
     */
    final class Thread extends CData
    {
    }

    /**
     * This is the read/write operation structure -- very basic.
     *
     * TODO Finish the description of this structure
     *
     */
    final class RWops extends CData
    {
        /**
         * Contains the size of the file in this rwops, or -1 if unknown
         *
         * @var int|null
         */
        public ?int $size;

        /**
         * Seek to \c offset relative to \c whence, one of stdio's whence values:
         * RW_SEEK_SET, RW_SEEK_CUR, RW_SEEK_END
         *
         * Contains the final offset in the data stream, or -1 on error.
         *
         * @var int|null
         */
        public ?int $seek;

        /**
         * Read up to \c maxnum objects each of size \c size from the data
         * stream to the area pointed at by \c ptr.
         *
         * Contains the number of objects read, or 0 at error or end of file.
         *
         * @var int|null
         */
        public ?int $read;

        /**
         * Write exactly \c num objects each of size \c size from the area
         * pointed at by \c ptr to data stream.
         *
         * Contains the number of objects written, or 0 at error or end of file.
         *
         * @var int|null
         */
        public ?int $write;

        /**
         * Close and free an allocated RWops structure.
         *
         * Contains 0 if successful or -1 on write error when flushing data.
         *
         * @var int|null
         */
        public ?int $close;

        /**
         * @var int
         */
        public int $type;

        /**
         * @var CData|CData[]
         */
        public CData $hidden;
    }

    /**
     *  The calculated values in this structure are calculated by OpenAudio().
     *
     *  For multi-channel audio, the default SDL channel mapping is:
     *  2:  FL FR                       (stereo)
     *  3:  FL FR LFE                   (2.1 surround)
     *  4:  FL FR BL BR                 (quad)
     *  5:  FL FR FC BL BR              (quad + center)
     *  6:  FL FR FC LFE SL SR          (5.1 surround - last two can also be BL BR)
     *  7:  FL FR FC LFE BC SL SR       (6.1 surround)
     *  8:  FL FR FC LFE BL BR SL SR    (7.1 surround)
     *
     * TODO Finish the description of this structure
     *
     */
    final class AudioSpec extends CData
    {
        /**
         * DSP frequency -- samples per second
         *
         * @var int
         */
        public int $freq;

        /**
         * Audio data format
         *
         * @var int|int
         */
        public int $format;

        /**
         * Number of channels: 1 mono, 2 stereo
         */
        public int $channels;

        /**
         * Audio buffer silence value (calculated)
         */
        public int $silence;

        /**
         * Audio buffer size in sample FRAMES (total samples divided by channel count)
         */
        public int $samples;

        /**
         * Necessary for some compile environments
         */
        public int $padding;

        /**
         * Audio buffer size in bytes (calculated)
         */
        public int $size;

        /**
         * Callback that feeds the audio device (NULL to use QueueAudio()).
         *
         * @var \Closure|CData
         */
        public \Closure $callback;

        /**
         * Userdata passed to callback (ignored for NULL callbacks).
         */
        public $userdata;
    }

    /**
     * A structure that contains audio data conversion information.
     *
     * @see https://wiki.libsdl.org/AudioCVT
     *
     * TODO Finish the description of this structure
     */
    final class AudioCVT extends CData
    {
        /**
         * Set to 1 if conversion possible
         *
         * @var int
         */
        public int $needed;

        /**
         * Source audio format
         *
         * @var int|int
         */
        public int $src_format;

        /**
         * Target audio format
         *
         * @var int|int
         */
        public int $dst_format;

        /**
         * Rate conversion increment
         *
         * @var float
         */
        public float $rate_incr;

        /**
         * Buffer to hold entire audio data
         *
         * @var int|CData
         */
        public int $buf;

        /**
         * Length of original audio buffer
         *
         * @var int
         */
        public int $len;

        /**
         * Length of converted audio buffer
         *
         * @var int
         */
        public int $len_cvt;

        /**
         * buffer must be len* len_mult big
         *
         * @var int
         */
        public int $len_mult;

        /**
         * Given len, final size is len* len_ratio
         */
        public float $len_ratio;

        /**
         * NULL-terminated list of filter functions
         *
         * @internal Internal usage
         * @var array|\Closure[]
         */
        public array $filters;

        /**
         * Current audio conversion function
         *
         * @internal Internal usage
         * @var int
         */
        public int $filter_index;
    }

    /**
     * AudioStream is a new audio conversion interface.
     *
     * The benefits vs AudioCVT:
     *  - it can handle resampling data in chunks without generating
     *      artifacts, when it doesn't have the complete buffer available.
     *  - it can handle incoming data in any variable size.
     *  - You push data as you have it, and pull it when you need it
     *
     * TODO Finish the description of this structure
     *
     */
    final class AudioStream extends CData
    {
    }

    /**
     * Everything in the pixel format structure is read-only.
     *
     * TODO Finish the description of this structure
     *
     */
    final class PixelFormat extends CData
    {
        /**
         * Uint32 format;
         *
         * @var int
         */
        public int $format;

        /**
         * Palette* palette;
         *
         * @var Palette|Palette[]|CData|null
         */
        public ?Palette $palette;

        /**
         * Uint8 BitsPerPixel;
         *
         * @var int
         */
        public int $BitsPerPixel;

        /**
         * Uint8 BytesPerPixel;
         *
         * @var int
         */
        public int $BytesPerPixel;

        /**
         * Uint8 padding[2];
         *
         * @var array|int[]
         */
        public array $padding;

        /**
         * Uint32 Rmask;
         *
         * @var int
         */
        public int $Rmask;

        /**
         * Uint32 Gmask;
         *
         * @var int
         */
        public int $Gmask;

        /**
         * Uint32 Bmask;
         *
         * @var int
         */
        public int $Bmask;

        /**
         * Uint32 Amask;
         *
         * @var int
         */
        public int $Amask;

        /**
         * Uint8 Rloss;
         *
         * @var int
         */
        public int $Rloss;

        /**
         * Uint8 Gloss;
         *
         * @var int
         */
        public int $Gloss;

        /**
         * Uint8 Bloss;
         *
         * @var int
         */
        public int $Bloss;

        /**
         * Uint8 Aloss;
         *
         * @var int
         */
        public int $Aloss;

        /**
         * Uint8 Rshift;
         *
         * @var int
         */
        public int $Rshift;

        /**
         * Uint8 Gshift;
         *
         * @var int
         */
        public int $Gshift;

        /**
         * Uint8 Bshift;
         *
         * @var int
         */
        public int $Bshift;

        /**
         * Uint8 Ashift;
         *
         * @var int
         */
        public int $Ashift;

        /**
         * int refcount;
         *
         * @var int
         */
        public int $refcount;

        /**
         * struct PixelFormat* next;
         *
         * @var PixelFormat|PixelFormat[]|CData|null
         */
        public ?PixelFormat $next;
    }

    /**
     * A structure that contains palette information.
     *
     * TODO Finish the description of this structure
     *
     */
    final class Palette extends CData
    {
        /**
         * int ncolors;
         *
         * @var int
         */
        public int $ncolors;

        /**
         * Color* colors;
         *
         * @var Color|Color[]|CData|null
         */
        public ?Color $colors;

        /**
         * Uint32 version;
         *
         * @var int
         */
        public int $version;

        /**
         * int refcount;
         *
         * @var int
         */
        public int $refcount;
    }

    /**
     * A structure that represents a color.
     *
     * TODO Finish the description of this structure
     *
     */
    final class Color extends CData
    {
        /**
         * Uint8 r;
         *
         * @var int
         */
        public int $r;

        /**
         * Uint8 g;
         *
         * @var int
         */
        public int $g;

        /**
         * Uint8 b;
         *
         * @var int
         */
        public int $b;

        /**
         * Uint8 a;
         *
         * @var int
         */
        public int $a;
    }

    /**
     * A rectangle, with the origin at the upper left (integer).
     *
     * TODO Finish the description of this structure
     *
     */
    final class Rect extends CData
    {
        /**
         * @var int
         */
        public int $x;

        /**
         * @var int
         */
        public int $y;

        /**
         * @var int
         */
        public int $w;

        /**
         * @var int
         */
        public int $h;
    }

    /**
     * A structure that defines a two dimensional point.
     *
     * TODO Finish the description of this structure
     *
     */
    final class Point extends CData
    {
        /**
         * @var int
         */
        public int $x;

        /**
         * @var int
         */
        public int $y;
    }

    /**
     * A structure that contains a collection of pixels used in software blitting.
     *
     * TODO Finish the description of this structure
     *
     */
    final class Surface extends CData
    {
        /**
         * @var int
         */
        public int $flags;

        /**
         * @var PixelFormat|PixelFormat[]|CData
         */
        public PixelFormat $format;

        /**
         * @var int
         */
        public int $w;

        /**
         * @var int
         */
        public int $h;

        /**
         * @var int
         */
        public int $pitch;

        /**
         * @var CData|int[]|null
         */
        public ?CData $pixels;

        /**
         * @var CData|mixed[]|null
         */
        public ?CData $userdata;

        /**
         * @var int
         */
        public int $locked;

        /**
         * @var CData|mixed[]|null
         */
        public ?CData $lock_data;

        /**
         * @var Rect|CData
         */
        public Rect $clip_rect;

        /**
         * @var BlitMap|BlitMap[]|CData
         */
        public BlitMap $map;

        /**
         * @var int
         */
        public int $refcount;
    }

    /**
     * Info for fast blit mapping to other surfaces
     *
     * TODO Finish the description of this structure
     *
     */
    final class BlitMap extends CData
    {
    }

    /**
     * Class DisplayMode
     *
     * TODO Finish the description of this structure
     *
     */
    final class DisplayMode extends CData
    {
        /**
         * Pixel format
         *
         * @var int
         */
        public int $format;

        /**
         * Width, in screen coordinates
         *
         * @var int
         */
        public int $w;

        /**
         * Height, in screen coordinates
         *
         * @var int
         */
        public int $h;

        /**
         * Refresh rate (or zero for unspecified)
         *
         * @var int
         */
        public int $refresh_rate;

        /**
         * Driver-specific data, initialize to 0
         *
         * @var CData|mixed|null
         */
        public ?CData $driverdata;
    }

    /**
     * The type used to identify a window
     *
     * TODO Finish the description of this structure
     *
     */
    final class Window extends CData
    {
    }

    /**
     * An opaque handle to an OpenGL context
     *
     */
    final class GLContext extends CData
    {
    }

    /**
     * Implementation dependent
     *
     * TODO Finish the description of this structure
     *
     */
    final class Cursor extends CData
    {
    }

    /**
     * A structure that encodes the stable unique id for a joystick device
     *
     * TODO Finish the description of this structure
     *
     */
    final class JoystickGUID extends CData
    {
        /**
         * @var array|int[]
         */
        public array $data;
    }

    /**
     * The joystick structure used to identify an SDL joystick
     *
     * TODO Finish the description of this structure
     *
     */
    final class Joystick extends CData
    {
    }

    /**
     * The Game Controller structure used to identify an SDL game controller
     *
     * TODO Finish the description of this structure
     *
     */
    final class GameController extends CData
    {
    }

    /**
     * Class GameControllerButtonBind
     *
     * TODO Finish the description of this structure
     *
     */
    final class GameControllerButtonBind extends CData
    {
        /**
         * GameControllerBindType bindType;
         *
         * @var int
         */
        public int $bindType;

        /**
         * union {
         *  int button;
         *  int axis;
         *  struct { int hat; int hat_mask; } hat;
         * } value;
         *
         * @var GameControllerButtonBindValue
         */
        public GameControllerButtonBindValue $value;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class GameControllerButtonBindValue extends CData
    {
        /**
         * int button;
         *
         * @var int
         */
        public int $button;

        /**
         * int axis;
         *
         * @var int
         */
        public int $axis;

        /**
         * struct { int hat; int hat_mask; } hat;
         *
         * @var GameControllerButtonBindValueHat|CData
         */
        public GameControllerButtonBindValueHat $hat;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class GameControllerButtonBindValueHat extends CData
    {
        /**
         * int hat;
         *
         * @var int
         */
        public int $hat;

        /**
         * int hat_mask;
         *
         * @var int
         */
        public int $hat_mask;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class Finger extends CData
    {
        /**
         * FingerID id;
         *
         * @var int
         */
        public int $id;

        /**
         * float x;
         *
         * @var float
         */
        public float $x;

        /**
         * float y;
         *
         * @var float
         */
        public float $y;

        /**
         * float pressure;
         *
         * @var float
         */
        public float $pressure;
    }

    /**
     * General event structure
     *
     * TODO Finish the description of this structure
     *
     */
    final class Event extends CData
    {
        public int                       $type;

        public CommonEvent               $common;

        public DisplayEvent              $display;

        public WindowEvent               $window;

        public KeyboardEvent             $key;

        public TextEditingEvent          $edit;

        public TextInputEvent            $text;

        public MouseMotionEvent          $motion;

        public MouseButtonEvent          $button;

        public MouseWheelEvent           $wheel;

        public JoyAxisEvent              $jaxis;

        public JoyBallEvent              $jball;

        public JoyHatEvent               $jhat;

        public JoyButtonEvent            $jbutton;

        public JoyDeviceEvent            $jdevice;

        public ControllerAxisEvent       $caxis;

        public ControllerButtonEvent     $cbutton;

        public ControllerDeviceEvent     $cdevice;

        public AudioDeviceEvent          $adevice;

        public SensorEvent               $sensor;

        public QuitEvent                 $quit;

        public UserEvent                 $user;

        public SysWMEvent                $syswm;

        public TouchFingerEvent          $tfinger;

        public MultiGestureEvent         $mgesture;

        public DollarGestureEvent        $dgesture;

        public DropEvent                 $drop;

        /**
         * @var array|int[]
         */
        public array $padding;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct commonEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *  } commonEvent;
     * </code>
     *
     */
    final class CommonEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct displayEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 display;
     *      Uint8 event;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *      Uint8 padding3;
     *      Sint32 data1;
     *  } displayEvent;
     * </code>
     *
     */
    final class DisplayEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $display;

        /**
         * @var int
         */
        public int $event;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;

        /**
         * @var int
         */
        public int $padding3;

        /**
         * @var int
         */
        public int $data1;
    }

    /**
     * A structure that contains window state change event data.
     *
     * <code>
     *  typedef struct windowEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 windowID;
     *      Uint8 event;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *      Uint8 padding3;
     *      Sint32 data1;
     *      Sint32 data2;
     *  } windowEvent;
     * </code>
     *
     * @see https://wiki.libsdl.org/windowEvent
     */
    final class WindowEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $windowID;

        /**
         * @var int
         */
        public int $event;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;

        /**
         * @var int
         */
        public int $padding3;

        /**
         * @var int
         */
        public int $data1;

        /**
         * @var int
         */
        public int $data2;
    }

    /**
     * A structure that contains keyboard button event information.
     *
     * <code>
     *  typedef struct keyboardEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 windowID;
     *      Uint8 state;
     *      Uint8 repeat;
     *      Uint8 padding2;
     *      Uint8 padding3;
     *      keysym keysym;
     *  } keyboardEvent;
     * </code>
     *
     * @see https://wiki.libsdl.org/keyboardEvent
     */
    final class KeyboardEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $windowID;

        /**
         * @var int
         */
        public int $state;

        /**
         * @var int
         */
        public int $repeat;

        /**
         * @var int
         */
        public int $padding2;

        /**
         * @var int
         */
        public int $padding3;

        /**
         * @var KeySym
         */
        public KeySym $keysym;
    }

    /**
     * <code>
     *  typedef struct keysym {
     *      scancode scancode;
     *      keycode sym;
     *      Uint16 mod;
     *      Uint32 unused;
     *  } keysym;
     * </code>
     *
     * @see https://wiki.libsdl.org/keysym
     */
    final class KeySym extends CData
    {
        /**
         * @var int|ScanCode
         */
        public int $scancode;

        /**
         * @var int|Key
         */
        public int $sym;

        /**
         * @var int|KeyMode
         */
        public int $mod;

        /**
         * @deprecated Unused
         * @var int
         */
        public int $unused;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct textInputEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 windowID;
     *      char text[32];
     *  } textInputEvent;
     * </code>
     *
     */
    final class TextInputEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $windowID;

        /**
         * @var string
         */
        public string $text;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class MouseMotionEvent extends CData
    {
        /**
         * ::mOUSEMOTION
         *
         * @var int
         */
        public int $type;

        /**
         * In milliseconds, populated using getTicks()
         *
         * @var int
         */
        public int $timestamp;

        /**
         * The window with mouse focus, if any
         *
         * @var int
         */
        public int $windowID;

        /**
         * The mouse instance id, or tOUCH_MOUSEID
         *
         * @var int
         */
        public int $which;

        /**
         * The current button state
         *
         * @var int
         */
        public int $state;

        /**
         * X coordinate, relative to window
         *
         * @var int
         */
        public int $x;

        /**
         * Y coordinate, relative to window
         *
         * @var int
         */
        public int $y;

        /**
         * The relative motion in the X direction
         *
         * @var int
         */
        public int $xrel;

        /**
         * The relative motion in the Y direction
         *
         * @var int
         */
        public int $yrel;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct mouseButtonEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 windowID;
     *      Uint32 which;
     *      Uint8 button;
     *      Uint8 state;
     *      Uint8 clicks;
     *      Uint8 padding1;
     *      Sint32 x;
     *      Sint32 y;
     *  } mouseButtonEvent;
     * </code>
     *
     */
    final class MouseButtonEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $windowID;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $button;

        /**
         * @var int
         */
        public int $state;

        /**
         * @var int
         */
        public int $clicks;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $x;

        /**
         * @var int
         */
        public int $y;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct textEditingEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 windowID;
     *      char text[32];
     *      Sint32 start;
     *      Sint32 length;
     *  } textEditingEvent;
     * </code>
     *
     */
    final class TextEditingEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $windowID;

        /**
         * @var string
         */
        public string $text;

        /**
         * @var int
         */
        public int $start;

        /**
         * @var int
         */
        public int $length;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct mouseWheelEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 windowID;
     *      Uint32 which;
     *      Sint32 x;
     *      Sint32 y;
     *      Uint32 direction;
     *  } mouseWheelEvent;
     * </code>
     *
     */
    final class MouseWheelEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $windowID;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $x;

        /**
         * @var int
         */
        public int $y;

        /**
         * @var int
         */
        public int $direction;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct joyAxisEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      joystickID which;
     *      Uint8 axis;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *      Uint8 padding3;
     *      Sint16 value;
     *      Uint16 padding4;
     *  } joyAxisEvent;
     * </code>
     *
     */
    final class JoyAxisEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $axis;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;

        /**
         * @var int
         */
        public int $padding3;

        /**
         * @var int
         */
        public int $value;

        /**
         * @var int
         */
        public int $padding4;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct joyBallEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      joystickID which;
     *      Uint8 ball;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *      Uint8 padding3;
     *      Sint16 xrel;
     *      Sint16 yrel;
     *  } joyBallEvent;
     * </code>
     *
     */
    final class JoyBallEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $ball;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;

        /**
         * @var int
         */
        public int $padding3;

        /**
         * @var int
         */
        public int $xrel;

        /**
         * @var int
         */
        public int $yrel;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct joyHatEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      joystickID which;
     *      Uint8 hat;
     *      Uint8 value;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *  } joyHatEvent;
     * </code>
     *
     */
    final class JoyHatEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $hat;

        /**
         * @var int
         */
        public int $value;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct joyButtonEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      joystickID which;
     *      Uint8 button;
     *      Uint8 state;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *  } joyButtonEvent;
     * </code>
     *
     */
    final class JoyButtonEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $button;

        /**
         * @var int
         */
        public int $state;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct joyDeviceEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Sint32 which;
     *  } joyDeviceEvent;
     * </code>
     *
     */
    final class JoyDeviceEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct controllerAxisEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      joystickID which;
     *      Uint8 axis;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *      Uint8 padding3;
     *      Sint16 value;
     *      Uint16 padding4;
     *  } controllerAxisEvent;
     * </code>
     *
     */
    final class ControllerAxisEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $axis;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;

        /**
         * @var int
         */
        public int $padding3;

        /**
         * @var int
         */
        public int $value;

        /**
         * @var int
         */
        public int $padding4;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct controllerButtonEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      joystickID which;
     *      Uint8 button;
     *      Uint8 state;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *  } controllerButtonEvent;
     * </code>
     *
     */
    final class ControllerButtonEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $button;

        /**
         * @var int
         */
        public int $state;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct controllerDeviceEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Sint32 which;
     *  } controllerDeviceEvent;
     * </code>
     *
     */
    final class ControllerDeviceEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct audioDeviceEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Uint32 which;
     *      Uint8 iscapture;
     *      Uint8 padding1;
     *      Uint8 padding2;
     *      Uint8 padding3;
     *  } audioDeviceEvent;
     * </code>
     *
     */
    final class AudioDeviceEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var int
         */
        public int $iscapture;

        /**
         * @var int
         */
        public int $padding1;

        /**
         * @var int
         */
        public int $padding2;

        /**
         * @var int
         */
        public int $padding3;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct sensorEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      Sint32 which;
     *      float data[6];
     *  } sensorEvent;
     * </code>
     *
     */
    final class SensorEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $which;

        /**
         * @var array|float[]
         */
        public array $data;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct quitEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *  } quitEvent;
     * </code>
     *
     */
    final class QuitEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class UserEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $windowID;

        /**
         * @var int
         */
        public int $code;

        /**
         * @var CData
         */
        public CData $data1;

        /**
         * @var CData
         */
        public CData $data2;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct sysWMEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      sysWMmsg* msg;
     *  } sysWMEvent;
     * </code>
     *
     */
    final class SysWMEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var CData|CStructPtr
         */
        public CData $msg;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct touchFingerEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      touchID touchId;
     *      fingerID fingerId;
     *      float x;
     *      float y;
     *      float dx;
     *      float dy;
     *      float pressure;
     *      #if __version__ >= 2.0.12
     *          Uint32 windowID;
     *      #endif
     *  } touchFingerEvent;
     * </code>
     *
     */
    final class TouchFingerEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $touchId;

        /**
         * @var int
         */
        public int $fingerId;

        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;

        /**
         * @var float
         */
        public float $dx;

        /**
         * @var float
         */
        public float $dy;

        /**
         * @var float
         */
        public float $pressure;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct multiGestureEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      touchID touchId;
     *      float dTheta;
     *      float dDist;
     *      float x;
     *      float y;
     *      Uint16 numFingers;
     *      Uint16 padding;
     *  } multiGestureEvent;
     * </code>
     *
     */
    final class MultiGestureEvent extends CData
    {
        public int $type;

        public int $timestamp;

        public int $touchId;

        public float $dTheta;

        public float $dDist;

        public float $x;

        public float $y;

        public int $numFingers;

        public int $padding;
    }

    /**
     * TODO Finish the description of this structure
     *
     * <code>
     *  typedef struct dollarGestureEvent {
     *      Uint32 type;
     *      Uint32 timestamp;
     *      touchID touchId;
     *      gestureID gestureId;
     *      Uint32 numFingers;
     *      float error;
     *      float x;
     *      float y;
     *  } dollarGestureEvent;
     * </code>
     *
     */
    final class DollarGestureEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var int
         */
        public int $touchId;

        /**
         * @var int
         */
        public int $gestureId;

        /**
         * @var int
         */
        public int $numFingers;

        /**
         * @var float
         */
        public float $error;

        /**
         * @var float
         */
        public float $x;

        /**
         * @var float
         */
        public float $y;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class DropEvent extends CData
    {
        /**
         * @var int
         */
        public int $type;

        /**
         * @var int
         */
        public int $timestamp;

        /**
         * @var CData|CCharPtr|string
         */
        public CData $file;

        /**
         * @var int
         */
        public int $windowID;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class Haptic extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class HapticEffect extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class LogPriority extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class LogOutputFunction extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class MessageBoxData extends CData
    {
        /**
         * MessageBoxFlags
         *
         * @var int
         */
        public int $flags;

        /**
         * Parent window, can be NULL
         *
         * @var Window|CData
         */
        public CData $window;

        /**
         * UTF-8 title
         *
         * @var string|CData
         */
        public string $title;

        /**
         * UTF-8 message text
         *
         * @var string|CData
         */
        public string $message;

        /**
         * @var int
         */
        public int $numbuttons;

        /**
         * @var MessageBoxButtonData[]|CData[]
         */
        public array $buttons;

        /**
         * MessageBoxColorScheme, can be NULL to use system settings
         *
         * @var MessageBoxColorScheme|CData
         */
        public CData $colorScheme;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class MessageBoxColorScheme extends CData
    {
        /**
         * @var array|MessageBoxColor[]
         */
        public array $colors;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class MessageBoxColor extends CData
    {
        public int $r;

        public int $g;

        public int $b;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class MessageBoxButtonData extends CData
    {
        /**
         * MessageBoxButtonFlags
         *
         * @var int
         */
        public int $flags;

        /**
         * User defined button id (value returned via ShowMessageBox)
         *
         * @var int
         */
        public int $buttonid;

        /**
         * The UTF-8 button text
         *
         * @var CData|string
         */
        public string $text;
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class RendererInfo extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class Renderer extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class Texture extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class FRect extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class SensorType extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class SensorID extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class Sensor extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class WindowShapeMode extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class WindowsMessageHook extends CData
    {
    }

    /**
     * @since SDL 2.0.1
     */
    final class IDirect3DDevice9 extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class TimerCallback extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class TimerID extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     */
    final class Version extends CData
    {
        /**
         * @var int
         */
        public int $major;

        /**
         * @var int
         */
        public int $minor;

        /**
         * @var int
         */
        public int $patch;
    }

    /**
     * TODO Finish the description of this structure
     *
     * @since SDL 2.0.6
     */
    final class VulkanInstance extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     * @since SDL 2.0.6
     */
    final class VulkanSurface extends CData
    {
    }

    /**
     * TODO Finish the description of this structure
     *
     * @since SDL 2.0.12
     */
    final class MetalView extends CData
    {
    }

// =============================================================================
//  Pointers
// =============================================================================

    /**
     * @mixin AssertData
     */
    final class AssertDataPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): AssertData
        {
        }

        private function offsetSet(int $i, AssertData $d): void
        {
        }
    }

    /**
     * @mixin AtomicT
     */
    final class AtomicTPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): AtomicT
        {
        }

        private function offsetSet(int $i, AtomicT $d): void
        {
        }
    }

    /**
     * @mixin Mutex
     */
    final class MutexPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Mutex
        {
        }

        private function offsetSet(int $i, Mutex $d): void
        {
        }
    }

    /**
     * @mixin Semaphore
     */
    final class SemaphorePtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Semaphore
        {
        }

        private function offsetSet(int $i, Semaphore $d): void
        {
        }
    }

    /**
     * @mixin Cond
     */
    final class CondPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Cond
        {
        }

        private function offsetSet(int $i, Cond $d): void
        {
        }
    }

    /**
     * @mixin Thread
     */
    final class ThreadPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Thread
        {
        }

        private function offsetSet(int $i, Thread $d): void
        {
        }
    }

    /**
     * @mixin RWops
     */
    final class RWopsPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): RWops
        {
        }

        private function offsetSet(int $i, RWops $d): void
        {
        }
    }

    /**
     * @mixin AudioSpec
     */
    final class AudioSpecPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): AudioSpec
        {
        }

        private function offsetSet(int $i, AudioSpec $d): void
        {
        }
    }

    /**
     * @mixin AudioCVT
     */
    final class AudioCVTPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): AudioCVT
        {
        }

        private function offsetSet(int $i, AudioCVT $d): void
        {
        }
    }

    /**
     * @mixin AudioStream
     */
    final class AudioStreamPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): AudioStream
        {
        }

        private function offsetSet(int $i, AudioStream $d): void
        {
        }
    }

    /**
     * @mixin PixelFormat
     */
    final class PixelFormatPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): PixelFormat
        {
        }

        private function offsetSet(int $i, PixelFormat $d): void
        {
        }
    }

    /**
     * @mixin Palette
     */
    final class PalettePtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Palette
        {
        }

        private function offsetSet(int $i, Palette $d): void
        {
        }
    }

    /**
     * @mixin Color
     */
    final class ColorPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Color
        {
        }

        private function offsetSet(int $i, Color $d): void
        {
        }
    }

    /**
     * @mixin Rect
     */
    final class RectPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Rect
        {
        }

        private function offsetSet(int $i, Rect $d): void
        {
        }
    }

    /**
     * @mixin Point
     */
    final class PointPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Point
        {
        }

        private function offsetSet(int $i, Point $d): void
        {
        }
    }

    /**
     * @mixin Surface
     */
    final class SurfacePtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Surface
        {
        }

        private function offsetSet(int $i, Surface $d): void
        {
        }
    }

    /**
     * @mixin SurfacePtr
     */
    final class SurfacePtrPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): SurfacePtr
        {
        }

        private function offsetSet(int $i, SurfacePtr $d): void
        {
        }
    }

    /**
     * @mixin DisplayMode
     */
    final class DisplayModePtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): DisplayMode
        {
        }

        private function offsetSet(int $i, DisplayMode $d): void
        {
        }
    }

    /**
     * @mixin Window
     */
    final class WindowPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Window
        {
        }

        private function offsetSet(int $i, Window $d): void
        {
        }
    }

    /**
     * @mixin WindowPtr
     */
    final class WindowPtrPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): WindowPtr
        {
        }

        private function offsetSet(int $i, WindowPtr $d): void
        {
        }
    }

    /**
     * @mixin Cursor
     */
    final class CursorPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Cursor
        {
        }

        private function offsetSet(int $i, Cursor $d): void
        {
        }
    }

    /**
     * @mixin Joystick
     */
    final class JoystickPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Joystick
        {
        }

        private function offsetSet(int $i, Joystick $d): void
        {
        }
    }

    /**
     * @mixin GameController
     */
    final class GameControllerPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): GameController
        {
        }

        private function offsetSet(int $i, GameController $d): void
        {
        }
    }

    /**
     * @mixin Finger
     */
    final class FingerPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Finger
        {
        }

        private function offsetSet(int $i, Finger $d): void
        {
        }
    }

    /**
     * @mixin Event
     */
    final class EventPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Event
        {
        }

        private function offsetSet(int $i, Event $d): void
        {
        }
    }

    final class EventFilterPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): EventFilter
        {
        }

        private function offsetSet(int $i, EventFilter $d): void
        {
        }
    }

    /**
     * @mixin Haptic
     */
    final class HapticPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Haptic
        {
        }

        private function offsetSet(int $i, Haptic $d): void
        {
        }
    }

    /**
     * @mixin HapticEffect
     */
    final class HapticEffectPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): HapticEffect
        {
        }

        private function offsetSet(int $i, HapticEffect $d): void
        {
        }
    }

    /**
     * @mixin LogOutputFunction
     */
    final class LogOutputFunctionPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): LogOutputFunction
        {
        }

        private function offsetSet(int $i, LogOutputFunction $d): void
        {
        }
    }

    /**
     * @mixin MessageBoxData
     */
    final class MessageBoxDataPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): MessageBoxData
        {
        }

        private function offsetSet(int $i, MessageBoxData $d): void
        {
        }
    }

    /**
     * @mixin RendererInfo
     */
    final class RendererInfoPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): RendererInfo
        {
        }

        private function offsetSet(int $i, RendererInfo $d): void
        {
        }
    }

    /**
     * @mixin Renderer
     */
    final class RendererPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Renderer
        {
        }

        private function offsetSet(int $i, Renderer $d): void
        {
        }
    }

    /**
     * @mixin RendererPtr
     */
    final class RendererPtrPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): RendererPtr
        {
        }

        private function offsetSet(int $i, RendererPtr $d): void
        {
        }
    }

    /**
     * @mixin Texture
     */
    final class TexturePtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Texture
        {
        }

        private function offsetSet(int $i, Texture $d): void
        {
        }
    }

    /**
     * @mixin FRect
     */
    final class FRectPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): FRect
        {
        }

        private function offsetSet(int $i, FRect $d): void
        {
        }
    }

    /**
     * @mixin Sensor
     */
    final class SensorPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Sensor
        {
        }

        private function offsetSet(int $i, Sensor $d): void
        {
        }
    }

    /**
     * @mixin WindowShapeMode
     */
    final class WindowShapeModePtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): WindowShapeMode
        {
        }

        private function offsetSet(int $i, WindowShapeMode $d): void
        {
        }
    }

    /**
     * @mixin IDirect3DDevice9
     */
    final class IDirect3DDevice9Ptr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): IDirect3DDevice9
        {
        }

        private function offsetSet(int $i, IDirect3DDevice9 $d): void
        {
        }
    }

    /**
     * @mixin Version
     */
    final class VersionPtr extends CData
    {
        private function __construct()
        {
        }

        private function offsetGet(int $i): Version
        {
        }

        private function offsetSet(int $i, Version $d): void
        {
        }
    }
}
