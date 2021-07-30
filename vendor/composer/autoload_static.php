<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ce85619d3ddeaf2085e6073f57dbe4f
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bootstrap\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bootstrap\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Bootstrap',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ce85619d3ddeaf2085e6073f57dbe4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ce85619d3ddeaf2085e6073f57dbe4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ce85619d3ddeaf2085e6073f57dbe4f::$classMap;

        }, null, ClassLoader::class);
    }
}