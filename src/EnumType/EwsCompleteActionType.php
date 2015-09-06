<?php

namespace Ews\EnumType;

/**
 * This class stands for CompleteActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCompleteActionType
{
    /**
     * Constant for value 'Commit'
     * @return string 'Commit'
     */
    const VALUE_COMMIT = 'Commit';
    /**
     * Constant for value 'Abandon'
     * @return string 'Abandon'
     */
    const VALUE_ABANDON = 'Abandon';
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
     * @uses self::VALUE_COMMIT
     * @uses self::VALUE_ABANDON
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMMIT,
            self::VALUE_ABANDON,
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
