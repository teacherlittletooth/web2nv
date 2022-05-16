<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite78222ea003ad67c632d945de1ce903c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite78222ea003ad67c632d945de1ce903c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite78222ea003ad67c632d945de1ce903c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite78222ea003ad67c632d945de1ce903c::$classMap;

        }, null, ClassLoader::class);
    }
}
