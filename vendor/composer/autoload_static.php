<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65567e3e41f680011d3fef14befd5f49
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit65567e3e41f680011d3fef14befd5f49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65567e3e41f680011d3fef14befd5f49::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
