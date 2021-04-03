<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnifiedGroupDetailsResponseShapeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupDetailsResponseShapeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Basic'
     * @return string 'Basic'
     */
    const VALUE_BASIC = 'Basic';
    /**
     * Constant for value 'Full'
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Return allowed values
     * @uses self::VALUE_BASIC
     * @uses self::VALUE_FULL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BASIC,
            self::VALUE_FULL,
        ];
    }
}
