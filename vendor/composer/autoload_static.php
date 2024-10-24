<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd31160e082d58a8d103bcee1b960af7a
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FrizarIlya\\ItylipBackend\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FrizarIlya\\ItylipBackend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd31160e082d58a8d103bcee1b960af7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd31160e082d58a8d103bcee1b960af7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd31160e082d58a8d103bcee1b960af7a::$classMap;

        }, null, ClassLoader::class);
    }
}
