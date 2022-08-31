<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit24cd7f22fd3c92f3af0c201241956cdf
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SlevomatCodingStandard\\' => 23,
        ),
        'P' => 
        array (
            'PHPStan\\PhpDocParser\\' => 21,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SlevomatCodingStandard\\' => 
        array (
            0 => __DIR__ . '/..' . '/slevomat/coding-standard/SlevomatCodingStandard',
        ),
        'PHPStan\\PhpDocParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/phpdoc-parser/src',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit24cd7f22fd3c92f3af0c201241956cdf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit24cd7f22fd3c92f3af0c201241956cdf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit24cd7f22fd3c92f3af0c201241956cdf::$classMap;

        }, null, ClassLoader::class);
    }
}
