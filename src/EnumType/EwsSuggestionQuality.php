<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SuggestionQuality EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestionQuality extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Excellent'
     * @return string 'Excellent'
     */
    const VALUE_EXCELLENT = 'Excellent';
    /**
     * Constant for value 'Good'
     * @return string 'Good'
     */
    const VALUE_GOOD = 'Good';
    /**
     * Constant for value 'Fair'
     * @return string 'Fair'
     */
    const VALUE_FAIR = 'Fair';
    /**
     * Constant for value 'Poor'
     * @return string 'Poor'
     */
    const VALUE_POOR = 'Poor';
    /**
     * Return allowed values
     * @uses self::VALUE_EXCELLENT
     * @uses self::VALUE_GOOD
     * @uses self::VALUE_FAIR
     * @uses self::VALUE_POOR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EXCELLENT,
            self::VALUE_GOOD,
            self::VALUE_FAIR,
            self::VALUE_POOR,
        ];
    }
}
