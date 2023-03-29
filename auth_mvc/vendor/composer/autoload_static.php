<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb8f012a7b30a87b0ab69b84d1a7e9f8
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb8f012a7b30a87b0ab69b84d1a7e9f8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb8f012a7b30a87b0ab69b84d1a7e9f8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb8f012a7b30a87b0ab69b84d1a7e9f8::$classMap;

        }, null, ClassLoader::class);
    }
}