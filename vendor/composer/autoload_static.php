<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3a0f0cbb9b6e205034676f5e8e4d4d6
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SigmaDevs\\EasyDemoImporter\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SigmaDevs\\EasyDemoImporter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SigmaDevs\\EasyDemoImporter\\App\\Backend\\DeactivateNotice' => __DIR__ . '/../..' . '/inc/App/Backend/DeactivateNotice.php',
        'SigmaDevs\\EasyDemoImporter\\App\\Backend\\Enqueue' => __DIR__ . '/../..' . '/inc/App/Backend/Enqueue.php',
        'SigmaDevs\\EasyDemoImporter\\App\\Backend\\Pages' => __DIR__ . '/../..' . '/inc/App/Backend/Pages.php',
        'SigmaDevs\\EasyDemoImporter\\App\\Backend\\PluginRowMeta' => __DIR__ . '/../..' . '/inc/App/Backend/PluginRowMeta.php',
        'SigmaDevs\\EasyDemoImporter\\App\\General\\Hooks' => __DIR__ . '/../..' . '/inc/App/General/Hooks.php',
        'SigmaDevs\\EasyDemoImporter\\Bootstrap' => __DIR__ . '/../..' . '/inc/Bootstrap.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Abstracts\\Base' => __DIR__ . '/../..' . '/inc/Common/Abstracts/Base.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Abstracts\\Enqueue' => __DIR__ . '/../..' . '/inc/Common/Abstracts/Enqueue.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Functions\\Actions' => __DIR__ . '/../..' . '/inc/Common/Functions/Actions.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Functions\\Callbacks' => __DIR__ . '/../..' . '/inc/Common/Functions/Callbacks.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Functions\\Filters' => __DIR__ . '/../..' . '/inc/Common/Functions/Filters.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Functions\\Functions' => __DIR__ . '/../..' . '/inc/Common/Functions/Functions.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Functions\\Helpers' => __DIR__ . '/../..' . '/inc/Common/Functions/Helpers.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Models\\AdminPage' => __DIR__ . '/../..' . '/inc/Common/Models/AdminPage.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Traits\\Requester' => __DIR__ . '/../..' . '/inc/Common/Traits/Requester.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Traits\\Singleton' => __DIR__ . '/../..' . '/inc/Common/Traits/Singleton.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Utils\\Errors' => __DIR__ . '/../..' . '/inc/Common/Utils/Errors.php',
        'SigmaDevs\\EasyDemoImporter\\Common\\Utils\\Notice' => __DIR__ . '/../..' . '/inc/Common/Utils/Notice.php',
        'SigmaDevs\\EasyDemoImporter\\Config\\Classes' => __DIR__ . '/../..' . '/inc/Config/Classes.php',
        'SigmaDevs\\EasyDemoImporter\\Config\\I18n' => __DIR__ . '/../..' . '/inc/Config/I18n.php',
        'SigmaDevs\\EasyDemoImporter\\Config\\Plugin' => __DIR__ . '/../..' . '/inc/Config/Plugin.php',
        'SigmaDevs\\EasyDemoImporter\\Config\\Requirements' => __DIR__ . '/../..' . '/inc/Config/Requirements.php',
        'SigmaDevs\\EasyDemoImporter\\Config\\Setup' => __DIR__ . '/../..' . '/inc/Config/Setup.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3a0f0cbb9b6e205034676f5e8e4d4d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3a0f0cbb9b6e205034676f5e8e4d4d6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3a0f0cbb9b6e205034676f5e8e4d4d6::$classMap;

        }, null, ClassLoader::class);
    }
}
