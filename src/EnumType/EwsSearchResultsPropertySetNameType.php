<?php

namespace Ews\EnumType;

/**
 * This class stands for SearchResultsPropertySetNameType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchResultsPropertySetNameType
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Owa16'
     * @return string 'Owa16'
     */
    const VALUE_OWA16 = 'Owa16';
    /**
     * Constant for value 'Outlook16'
     * @return string 'Outlook16'
     */
    const VALUE_OUTLOOK16 = 'Outlook16';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_OWA16
     * @uses self::VALUE_OUTLOOK16
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_OWA16,
            self::VALUE_OUTLOOK16,
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
