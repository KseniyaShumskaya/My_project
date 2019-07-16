<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2706ef671e1fd70da7881420c7d1b2ad
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Web\\FrontController\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Web\\FrontController\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2706ef671e1fd70da7881420c7d1b2ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2706ef671e1fd70da7881420c7d1b2ad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}