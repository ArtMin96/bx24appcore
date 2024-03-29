<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88117fec519017a75eb22c4d7a07fd67
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bitrix24\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bitrix24\\' => 
        array (
            0 => __DIR__ . '/../..' . '/bitrix24',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88117fec519017a75eb22c4d7a07fd67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88117fec519017a75eb22c4d7a07fd67::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
