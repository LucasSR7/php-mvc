<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0535e133cdc4411f17f16111fef033c6
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SON' => 
            array (
                0 => 'C:\\xampp\\htdocs\\phpmvc\\vendor',
            ),
        ),
        'A' => 
        array (
            'App' => 
            array (
                0 => '../',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0535e133cdc4411f17f16111fef033c6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
