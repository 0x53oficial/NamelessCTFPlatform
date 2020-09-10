<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit865bb252d17ada26b7581e4859e49a0c
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NCP\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NCP\\' => 
        array (
            0 => __DIR__ . '/..' . '/NCP',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit865bb252d17ada26b7581e4859e49a0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit865bb252d17ada26b7581e4859e49a0c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
