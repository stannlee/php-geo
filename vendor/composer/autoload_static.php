<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83adb3ff86ca6016feba1bde9d11006d
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GeoController\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GeoController\\' => 
        array (
            0 => __DIR__ . '/../..' . '/devc_stuff/src/geonames/helpers.php',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83adb3ff86ca6016feba1bde9d11006d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83adb3ff86ca6016feba1bde9d11006d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}