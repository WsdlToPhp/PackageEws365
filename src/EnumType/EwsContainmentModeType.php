<?php

namespace Ews\EnumType;

/**
 * This class stands for ContainmentModeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContainmentModeType
{
    /**
     * Constant for value 'FullString'
     * @return string 'FullString'
     */
    const VALUE_FULLSTRING = 'FullString';
    /**
     * Constant for value 'Prefixed'
     * @return string 'Prefixed'
     */
    const VALUE_PREFIXED = 'Prefixed';
    /**
     * Constant for value 'Substring'
     * @return string 'Substring'
     */
    const VALUE_SUBSTRING = 'Substring';
    /**
     * Constant for value 'PrefixOnWords'
     * @return string 'PrefixOnWords'
     */
    const VALUE_PREFIXONWORDS = 'PrefixOnWords';
    /**
     * Constant for value 'ExactPhrase'
     * @return string 'ExactPhrase'
     */
    const VALUE_EXACTPHRASE = 'ExactPhrase';
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
     * @uses self::VALUE_FULLSTRING
     * @uses self::VALUE_PREFIXED
     * @uses self::VALUE_SUBSTRING
     * @uses self::VALUE_PREFIXONWORDS
     * @uses self::VALUE_EXACTPHRASE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FULLSTRING,
            self::VALUE_PREFIXED,
            self::VALUE_SUBSTRING,
            self::VALUE_PREFIXONWORDS,
            self::VALUE_EXACTPHRASE,
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
