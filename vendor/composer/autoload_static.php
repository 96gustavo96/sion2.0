<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c58bb400d699d8f5bf4973b719b9f54
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Luecano\\NumeroALetras\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Luecano\\NumeroALetras\\' => 
        array (
            0 => __DIR__ . '/..' . '/luecano/numero-a-letras/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c58bb400d699d8f5bf4973b719b9f54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c58bb400d699d8f5bf4973b719b9f54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c58bb400d699d8f5bf4973b719b9f54::$classMap;

        }, null, ClassLoader::class);
    }
}
