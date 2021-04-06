<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita42729632598005a5e0a438e0392a996
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita42729632598005a5e0a438e0392a996::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita42729632598005a5e0a438e0392a996::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita42729632598005a5e0a438e0392a996::$classMap;

        }, null, ClassLoader::class);
    }
}
