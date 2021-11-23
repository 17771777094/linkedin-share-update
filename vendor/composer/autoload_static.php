<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11eb7b0d16a5cf050e6f163ff7360501
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lightit\\LinkedinShare\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lightit\\LinkedinShare\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11eb7b0d16a5cf050e6f163ff7360501::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11eb7b0d16a5cf050e6f163ff7360501::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
