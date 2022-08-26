<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit794df1079d694f13c94f1370c94750ab
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit794df1079d694f13c94f1370c94750ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit794df1079d694f13c94f1370c94750ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit794df1079d694f13c94f1370c94750ab::$classMap;

        }, null, ClassLoader::class);
    }
}