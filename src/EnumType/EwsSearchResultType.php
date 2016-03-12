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
    const VALUE_STATISTICS_ONLY = 'StatisticsOnly';
    /**
     * Constant for value 'PreviewOnly'
     * @return string 'PreviewOnly'
     */
    const VALUE_PREVIEW_ONLY = 'PreviewOnly';
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
     * @uses self::VALUE_STATISTICS_ONLY
     * @uses self::VALUE_PREVIEW_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STATISTICS_ONLY,
            self::VALUE_PREVIEW_ONLY,
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
