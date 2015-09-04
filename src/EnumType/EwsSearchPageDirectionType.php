<?php

namespace Ews\EnumType;

/**
 * This class stands for SearchPageDirectionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSearchPageDirectionType
{
    /**
     * Constant for value 'Previous'
     * @return string 'Previous'
     */
    const VALUE_PREVIOUS = 'Previous';
    /**
     * Constant for value 'Next'
     * @return string 'Next'
     */
    const VALUE_NEXT = 'Next';
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
     * @uses self::VALUE_PREVIOUS
     * @uses self::VALUE_NEXT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PREVIOUS,
            self::VALUE_NEXT,
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
