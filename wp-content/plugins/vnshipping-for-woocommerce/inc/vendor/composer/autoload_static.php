<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitae4d50d7904de1ff4e6fb2965c402f17
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'VNShipping\\AddressHooks' => __DIR__ . '/../..' . '/AddressHooks.php',
        'VNShipping\\Address\\AddressMapper' => __DIR__ . '/../..' . '/Address/AddressMapper.php',
        'VNShipping\\Address\\DataLoader' => __DIR__ . '/../..' . '/Address/DataLoader.php',
        'VNShipping\\Address\\District' => __DIR__ . '/../..' . '/Address/District.php',
        'VNShipping\\Address\\Province' => __DIR__ . '/../..' . '/Address/Province.php',
        'VNShipping\\Address\\Ward' => __DIR__ . '/../..' . '/Address/Ward.php',
        'VNShipping\\AdminActions' => __DIR__ . '/../..' . '/AdminActions.php',
        'VNShipping\\CartShippingContext' => __DIR__ . '/../..' . '/CartShippingContext.php',
        'VNShipping\\Courier\\AbstractCourier' => __DIR__ . '/../..' . '/Courier/AbstractCourier.php',
        'VNShipping\\Courier\\Couriers' => __DIR__ . '/../..' . '/Courier/Couriers.php',
        'VNShipping\\Courier\\Exception\\BadResponseException' => __DIR__ . '/../..' . '/Courier/Exception/BadResponseException.php',
        'VNShipping\\Courier\\Exception\\InvalidAddressDataException' => __DIR__ . '/../..' . '/Courier/Exception/InvalidAddressDataException.php',
        'VNShipping\\Courier\\Exception\\InvalidParameterException' => __DIR__ . '/../..' . '/Courier/Exception/InvalidParameterException.php',
        'VNShipping\\Courier\\Exception\\RequestException' => __DIR__ . '/../..' . '/Courier/Exception/RequestException.php',
        'VNShipping\\Courier\\Exception\\UnauthorizedException' => __DIR__ . '/../..' . '/Courier/Exception/UnauthorizedException.php',
        'VNShipping\\Courier\\Factory' => __DIR__ . '/../..' . '/Courier/Factory.php',
        'VNShipping\\Courier\\GHN' => __DIR__ . '/../..' . '/Courier/GHN.php',
        'VNShipping\\Courier\\RequestParameters' => __DIR__ . '/../..' . '/Courier/RequestParameters.php',
        'VNShipping\\Courier\\Response\\CollectionResponseData' => __DIR__ . '/../..' . '/Courier/Response/CollectionResponseData.php',
        'VNShipping\\Courier\\Response\\JsonResponseData' => __DIR__ . '/../..' . '/Courier/Response/JsonResponseData.php',
        'VNShipping\\Courier\\Response\\PaginatedResponseData' => __DIR__ . '/../..' . '/Courier/Response/PaginatedResponseData.php',
        'VNShipping\\Courier\\Response\\ShippingOrderResponseData' => __DIR__ . '/../..' . '/Courier/Response/ShippingOrderResponseData.php',
        'VNShipping\\Courier\\ShippingStatus' => __DIR__ . '/../..' . '/Courier/ShippingStatus.php',
        'VNShipping\\DatabaseUpgrader' => __DIR__ . '/../..' . '/DatabaseUpgrader.php',
        'VNShipping\\OptionsResolver\\OptionConfigurator' => __DIR__ . '/../..' . '/OptionsResolver/OptionConfigurator.php',
        'VNShipping\\OptionsResolver\\OptionsResolver' => __DIR__ . '/../..' . '/OptionsResolver/OptionsResolver.php',
        'VNShipping\\OrderHelper' => __DIR__ . '/../..' . '/OrderHelper.php',
        'VNShipping\\OrderListTable' => __DIR__ . '/../..' . '/OrderListTable.php',
        'VNShipping\\OrderShippingContext' => __DIR__ . '/../..' . '/OrderShippingContext.php',
        'VNShipping\\Plugin' => __DIR__ . '/../..' . '/Plugin.php',
        'VNShipping\\REST\\AddressController' => __DIR__ . '/../..' . '/REST/AddressController.php',
        'VNShipping\\REST\\ShippingController' => __DIR__ . '/../..' . '/REST/ShippingController.php',
        'VNShipping\\ShippingData' => __DIR__ . '/../..' . '/ShippingData.php',
        'VNShipping\\ShippingMethod\\AccessTokenAwareInterface' => __DIR__ . '/../..' . '/ShippingMethod/AccessTokenAwareInterface.php',
        'VNShipping\\ShippingMethod\\GHNShippingMethod' => __DIR__ . '/../..' . '/ShippingMethod/GHNShippingMethod.php',
        'VNShipping\\ShippingMethod\\ShippingMethodInterface' => __DIR__ . '/../..' . '/ShippingMethod/ShippingMethodInterface.php',
        'VNShipping\\ShippingMethod\\ShippingMethodTrait' => __DIR__ . '/../..' . '/ShippingMethod/ShippingMethodTrait.php',
        'VNShipping\\Traits\\SingletonTrait' => __DIR__ . '/../..' . '/Traits/SingletonTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitae4d50d7904de1ff4e6fb2965c402f17::$classMap;

        }, null, ClassLoader::class);
    }
}
