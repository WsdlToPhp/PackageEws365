<?php

namespace Ews\EnumType;

/**
 * This class stands for RetentionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRetentionType
{
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Archive'
     * @return string 'Archive'
     */
    const VALUE_ARCHIVE = 'Archive';
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
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_ARCHIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELETE,
            self::VALUE_ARCHIVE,
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
