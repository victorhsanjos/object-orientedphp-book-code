<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73904166bd6378529987e0ae9b7d5cf2
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IcyApril\\ChapterTwo\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IcyApril\\ChapterTwo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73904166bd6378529987e0ae9b7d5cf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73904166bd6378529987e0ae9b7d5cf2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
