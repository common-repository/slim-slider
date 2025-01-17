<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7395e7d18590d5d969712f65fe809f5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SlimSlider\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SlimSlider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/SlimSlider',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'SlimSlider\\Admin\\GetStarted' => __DIR__ . '/../..' . '/src/SlimSlider/Admin/GetStarted.php',
        'SlimSlider\\Asset' => __DIR__ . '/../..' . '/src/SlimSlider/Asset.php',
        'SlimSlider\\CtpMeta\\Contracts\\SettingsInterface' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/Contracts/SettingsInterface.php',
        'SlimSlider\\CtpMeta\\Data' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/Data.php',
        'SlimSlider\\CtpMeta\\Editor' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/Editor.php',
        'SlimSlider\\CtpMeta\\FormHelper' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/FormHelper.php',
        'SlimSlider\\CtpMeta\\MetaBox' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/MetaBox.php',
        'SlimSlider\\CtpMeta\\Settings' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/Settings.php',
        'SlimSlider\\CtpMeta\\Traits\\Form' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/Traits/Form.php',
        'SlimSlider\\CtpMeta\\Traits\\MetaTrait' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/Traits/MetaTrait.php',
        'SlimSlider\\CtpMeta\\Traits\\StyleTrait' => __DIR__ . '/../..' . '/src/SlimSlider/CtpMeta/Traits/StyleTrait.php',
        'SlimSlider\\EasyAdmin\\Admin' => __DIR__ . '/../..' . '/src/SlimSlider/EasyAdmin/Admin.php',
        'SlimSlider\\EasyAdmin\\AdminPage' => __DIR__ . '/../..' . '/src/SlimSlider/EasyAdmin/AdminPage.php',
        'SlimSlider\\EasyAdmin\\AdminPageInterface' => __DIR__ . '/../..' . '/src/SlimSlider/EasyAdmin/AdminPageInterface.php',
        'SlimSlider\\EasyAdmin\\ParamTrait' => __DIR__ . '/../..' . '/src/SlimSlider/EasyAdmin/ParamTrait.php',
        'SlimSlider\\EasyAdmin\\StylesTrait' => __DIR__ . '/../..' . '/src/SlimSlider/EasyAdmin/StylesTrait.php',
        'SlimSlider\\MetaView\\Slide' => __DIR__ . '/../..' . '/src/SlimSlider/MetaView/Slide.php',
        'SlimSlider\\MetaView\\Sliders' => __DIR__ . '/../..' . '/src/SlimSlider/MetaView/Sliders.php',
        'SlimSlider\\Navigation' => __DIR__ . '/../..' . '/src/SlimSlider/Navigation.php',
        'SlimSlider\\Plugin' => __DIR__ . '/../..' . '/src/SlimSlider/Plugin.php',
        'SlimSlider\\PostType\\Slider' => __DIR__ . '/../..' . '/src/SlimSlider/PostType/Slider.php',
        'SlimSlider\\PostType\\SlimSlide' => __DIR__ . '/../..' . '/src/SlimSlider/PostType/SlimSlide.php',
        'SlimSlider\\Slides' => __DIR__ . '/../..' . '/src/SlimSlider/Slides.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7395e7d18590d5d969712f65fe809f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7395e7d18590d5d969712f65fe809f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7395e7d18590d5d969712f65fe809f5::$classMap;

        }, null, ClassLoader::class);
    }
}
