<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaaa161de2c47514ec2f8a3b9623e8014
{
    public static $classMap = array (
        'Config_Lite' => __DIR__ . '/..' . '/pear-pear.php.net/Config_Lite/Config/Lite.php',
        'Config_Lite_Exception' => __DIR__ . '/..' . '/pear-pear.php.net/Config_Lite/Config/Lite/Exception.php',
        'Config_Lite_Exception_InvalidArgument' => __DIR__ . '/..' . '/pear-pear.php.net/Config_Lite/Config/Lite/Exception/InvalidArgument.php',
        'Config_Lite_Exception_Runtime' => __DIR__ . '/..' . '/pear-pear.php.net/Config_Lite/Config/Lite/Exception/Runtime.php',
        'Config_Lite_Exception_UnexpectedValue' => __DIR__ . '/..' . '/pear-pear.php.net/Config_Lite/Config/Lite/Exception/UnexpectedValue.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitaaa161de2c47514ec2f8a3b9623e8014::$classMap;

        }, null, ClassLoader::class);
    }
}
