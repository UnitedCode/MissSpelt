<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd34184087c0b8773417ebb52be36e493
{
    public static $classMap = array (
        'App\\Controller\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controller\\ReservationController' => __DIR__ . '/../..' . '/app/controllers/ReservationController.php',
        'App\\Controller\\ReviewController' => __DIR__ . '/../..' . '/app/controllers/ReviewController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Model\\Reservation' => __DIR__ . '/../..' . '/app/models/Reservation.php',
        'ComposerAutoloaderInitd34184087c0b8773417ebb52be36e493' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitd34184087c0b8773417ebb52be36e493' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Review' => __DIR__ . '/../..' . '/app/models/Review.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd34184087c0b8773417ebb52be36e493::$classMap;

        }, null, ClassLoader::class);
    }
}
