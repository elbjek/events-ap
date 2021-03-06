<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0e7a929780ec1ee0f3024efd98691cf
{
    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/controllers/AdminController.php',
        'App\\Controllers\\Authenticate' => __DIR__ . '/../..' . '/controllers/Authenticate.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Database\\Connection' => __DIR__ . '/../..' . '/database/Connection.php',
        'App\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/database/QueryBuilder.php',
        'ComposerAutoloaderInitc0e7a929780ec1ee0f3024efd98691cf' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitc0e7a929780ec1ee0f3024efd98691cf' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc0e7a929780ec1ee0f3024efd98691cf::$classMap;

        }, null, ClassLoader::class);
    }
}
