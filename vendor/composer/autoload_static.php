<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ddea94598ea2b32eeadddba3e81da43
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MessagePack\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MessagePack\\' => 
        array (
            0 => __DIR__ . '/..' . '/rybakit/msgpack/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ddea94598ea2b32eeadddba3e81da43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ddea94598ea2b32eeadddba3e81da43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2ddea94598ea2b32eeadddba3e81da43::$classMap;

        }, null, ClassLoader::class);
    }
}