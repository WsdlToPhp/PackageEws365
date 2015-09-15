<?php

namespace Ews\EnumType;

/**
 * This class stands for SearchResultType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchResultType
{
    /**
     * Constant for value 'StatisticsOnly'
     * @return string 'StatisticsOnly'
     */
    const VALUE_STATISTICSONLY = 'StatisticsOnly';
    /**
     * Constant for value 'PreviewOnly'
     * @return string 'PreviewOnly'
     */
    const VALUE_PREVIEWONLY = 'PreviewOnly';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_STATISTICSONLY
     * @uses self::VALUE_PREVIEWONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STATISTICSONLY,
            self::VALUE_PREVIEWONLY,
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
