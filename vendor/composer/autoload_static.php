<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e9b3527e95a0d88181528cc74a013a6
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e9b3527e95a0d88181528cc74a013a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e9b3527e95a0d88181528cc74a013a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e9b3527e95a0d88181528cc74a013a6::$classMap;

        }, null, ClassLoader::class);
    }
}
