<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit489a723e97a87a2a16e3b17887efed07
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'L' => 
        array (
            'Library\\' => 8,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/App/Model',
        ),
        'Library\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/App/Lib',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/App/Core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/App/Controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit489a723e97a87a2a16e3b17887efed07::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit489a723e97a87a2a16e3b17887efed07::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
