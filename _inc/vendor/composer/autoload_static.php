<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9589564547fd7d84f3a6ec23c5ab429e
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9589564547fd7d84f3a6ec23c5ab429e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9589564547fd7d84f3a6ec23c5ab429e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
