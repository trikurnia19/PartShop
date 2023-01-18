<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbb89e939401b4f7a453b45774eb4336e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbb89e939401b4f7a453b45774eb4336e', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbb89e939401b4f7a453b45774eb4336e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbb89e939401b4f7a453b45774eb4336e::getInitializer($loader));

        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInitbb89e939401b4f7a453b45774eb4336e::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirebb89e939401b4f7a453b45774eb4336e($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirebb89e939401b4f7a453b45774eb4336e($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
