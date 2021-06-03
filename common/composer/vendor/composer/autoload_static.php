<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ec9af3c9a570eec96f235c214be2fbd
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ec9af3c9a570eec96f235c214be2fbd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ec9af3c9a570eec96f235c214be2fbd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}