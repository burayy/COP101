<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc3199140e8d4837dd2fe8016f54ad1c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc3199140e8d4837dd2fe8016f54ad1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc3199140e8d4837dd2fe8016f54ad1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc3199140e8d4837dd2fe8016f54ad1c::$classMap;

        }, null, ClassLoader::class);
    }
}