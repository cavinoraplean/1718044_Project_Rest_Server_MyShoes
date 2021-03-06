<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b6cceb7777e77525a562f4535d115b3
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b6cceb7777e77525a562f4535d115b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b6cceb7777e77525a562f4535d115b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b6cceb7777e77525a562f4535d115b3::$classMap;

        }, null, ClassLoader::class);
    }
}
