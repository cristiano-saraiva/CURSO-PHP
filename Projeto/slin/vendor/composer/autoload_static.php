<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit599ddc252bb9eeeed5793ffcb8c4d0be
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit599ddc252bb9eeeed5793ffcb8c4d0be::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
