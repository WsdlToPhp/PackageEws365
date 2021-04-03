<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AvailabilityProxyRequestType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAvailabilityProxyRequestType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CrossSite'
     * @return string 'CrossSite'
     */
    const VALUE_CROSS_SITE = 'CrossSite';
    /**
     * Constant for value 'CrossForest'
     * @return string 'CrossForest'
     */
    const VALUE_CROSS_FOREST = 'CrossForest';
    /**
     * Return allowed values
     * @uses self::VALUE_CROSS_SITE
     * @uses self::VALUE_CROSS_FOREST
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CROSS_SITE,
            self::VALUE_CROSS_FOREST,
        ];
    }
}
