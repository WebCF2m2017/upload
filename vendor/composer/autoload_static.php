<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite30245aa9d4bfb0aa3ee4876f3f59b22
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite30245aa9d4bfb0aa3ee4876f3f59b22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite30245aa9d4bfb0aa3ee4876f3f59b22::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite30245aa9d4bfb0aa3ee4876f3f59b22::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
