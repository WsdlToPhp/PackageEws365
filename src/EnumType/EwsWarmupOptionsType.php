<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WarmupOptionsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWarmupOptionsType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Suggestions'
     * @return string 'Suggestions'
     */
    const VALUE_SUGGESTIONS = 'Suggestions';
    /**
     * Constant for value 'Results'
     * @return string 'Results'
     */
    const VALUE_RESULTS = 'Results';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SUGGESTIONS
     * @uses self::VALUE_RESULTS
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SUGGESTIONS,
            self::VALUE_RESULTS,
            self::VALUE_ALL,
        );
    }
}
