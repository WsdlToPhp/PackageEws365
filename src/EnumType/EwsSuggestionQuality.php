<?php

namespace Ews\EnumType;

/**
 * This class stands for SuggestionQuality EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSuggestionQuality
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
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_EXCELLENT
     * @uses self::VALUE_GOOD
     * @uses self::VALUE_FAIR
     * @uses self::VALUE_POOR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXCELLENT,
            self::VALUE_GOOD,
            self::VALUE_FAIR,
            self::VALUE_POOR,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
