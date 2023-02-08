<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf097e43420cc98692da0dc698466c4f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cqpisme\\Packagetest\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cqpisme\\Packagetest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf097e43420cc98692da0dc698466c4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf097e43420cc98692da0dc698466c4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf097e43420cc98692da0dc698466c4f::$classMap;

        }, null, ClassLoader::class);
    }
}