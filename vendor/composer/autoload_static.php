<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe6fb69577288cd5f3ee1d82848e5f1f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/hcodebr/php-classes/src',
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe6fb69577288cd5f3ee1d82848e5f1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe6fb69577288cd5f3ee1d82848e5f1f::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitfe6fb69577288cd5f3ee1d82848e5f1f::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfe6fb69577288cd5f3ee1d82848e5f1f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfe6fb69577288cd5f3ee1d82848e5f1f::$classMap;

        }, null, ClassLoader::class);
    }
}
