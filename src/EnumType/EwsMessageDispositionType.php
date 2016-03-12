<?php

namespace Ews\EnumType;

/**
 * This class stands for MessageDispositionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMessageDispositionType
{
    /**
     * Constant for value 'SaveOnly'
     * @return string 'SaveOnly'
     */
    const VALUE_SAVE_ONLY = 'SaveOnly';
    /**
     * Constant for value 'SendOnly'
     * @return string 'SendOnly'
     */
    const VALUE_SEND_ONLY = 'SendOnly';
    /**
     * Constant for value 'SendAndSaveCopy'
     * @return string 'SendAndSaveCopy'
     */
    const VALUE_SEND_AND_SAVE_COPY = 'SendAndSaveCopy';
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
     * @uses self::VALUE_SAVE_ONLY
     * @uses self::VALUE_SEND_ONLY
     * @uses self::VALUE_SEND_AND_SAVE_COPY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SAVE_ONLY,
            self::VALUE_SEND_ONLY,
            self::VALUE_SEND_AND_SAVE_COPY,
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
