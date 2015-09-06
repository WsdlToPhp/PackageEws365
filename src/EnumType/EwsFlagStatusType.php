<?php

namespace Ews\EnumType;

/**
 * This class stands for FlagStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlagStatusType
{
    /**
     * Constant for value 'NotFlagged'
     * @return string 'NotFlagged'
     */
    const VALUE_NOTFLAGGED = 'NotFlagged';
    /**
     * Constant for value 'Flagged'
     * @return string 'Flagged'
     */
    const VALUE_FLAGGED = 'Flagged';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
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
     * @uses self::VALUE_NOTFLAGGED
     * @uses self::VALUE_FLAGGED
     * @uses self::VALUE_COMPLETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTFLAGGED,
            self::VALUE_FLAGGED,
            self::VALUE_COMPLETE,
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
