<?php

namespace Ews\EnumType;

/**
 * This class stands for BodyTypeResponseType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBodyTypeResponseType
{
    /**
     * Constant for value 'Best'
     * @return string 'Best'
     */
    const VALUE_BEST = 'Best';
    /**
     * Constant for value 'HTML'
     * @return string 'HTML'
     */
    const VALUE_HTML = 'HTML';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
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
     * @uses self::VALUE_BEST
     * @uses self::VALUE_HTML
     * @uses self::VALUE_TEXT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BEST,
            self::VALUE_HTML,
            self::VALUE_TEXT,
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
