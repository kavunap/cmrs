<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite40a819b240dd7a180826f257ac01c5f
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite40a819b240dd7a180826f257ac01c5f::$classMap;

        }, null, ClassLoader::class);
    }
}
