<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34f63ae071897de28a69d6a2f86a8635
{
    public static $files = array (
        'dd81a9214a019d39eda343a4ad9e1987' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '34971c909d7c554f2bd313156ca5fefd' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        'a3f9da12b9bbeae7dcfcadefeffc8e4f' => __DIR__ . '/../..' . '/app/helpers/flash.php',
        'df2fec6bc9fd1e58e3427ff5a46df546' => __DIR__ . '/../..' . '/app/helpers/session.php',
        '56475b01541fe4279db476f9d1d4d0ef' => __DIR__ . '/../..' . '/app/helpers/validate.php',
        '0fa8f2827f4815ad3ff007e602d6523f' => __DIR__ . '/../..' . '/app/router/router.php',
        '2c12fde09a8d019eb1f150a430809b3c' => __DIR__ . '/../..' . '/app/core/controller.php',
        'ce3419880ee71a8739755113846f8518' => __DIR__ . '/../..' . '/app/database/connection.php',
        '7fa25b4381d4c73b184e89b3cfffd79d' => __DIR__ . '/../..' . '/app/database/fetch.php',
        '07319531c59c6645ca913e80428dd9e4' => __DIR__ . '/../..' . '/app/database/create.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\Login' => __DIR__ . '/../..' . '/app/controllers/Login.php',
        'app\\controllers\\User' => __DIR__ . '/../..' . '/app/controllers/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34f63ae071897de28a69d6a2f86a8635::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34f63ae071897de28a69d6a2f86a8635::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34f63ae071897de28a69d6a2f86a8635::$classMap;

        }, null, ClassLoader::class);
    }
}
