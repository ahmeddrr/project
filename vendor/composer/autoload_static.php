<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5bcf0f55c395086c468d9941cf95541
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd5bcf0f55c395086c468d9941cf95541::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd5bcf0f55c395086c468d9941cf95541::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd5bcf0f55c395086c468d9941cf95541::$classMap;

        }, null, ClassLoader::class);
    }
}
