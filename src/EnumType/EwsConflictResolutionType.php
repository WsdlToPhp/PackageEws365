<?php

namespace Ews\EnumType;

/**
 * This class stands for ConflictResolutionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type of conflict resolution to attempt during update
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConflictResolutionType
{
    /**
     * Constant for value 'NeverOverwrite'
     * @return string 'NeverOverwrite'
     */
    const VALUE_NEVEROVERWRITE = 'NeverOverwrite';
    /**
     * Constant for value 'AutoResolve'
     * @return string 'AutoResolve'
     */
    const VALUE_AUTORESOLVE = 'AutoResolve';
    /**
     * Constant for value 'AlwaysOverwrite'
     * @return string 'AlwaysOverwrite'
     */
    const VALUE_ALWAYSOVERWRITE = 'AlwaysOverwrite';
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
     * @uses self::VALUE_NEVEROVERWRITE
     * @uses self::VALUE_AUTORESOLVE
     * @uses self::VALUE_ALWAYSOVERWRITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEVEROVERWRITE,
            self::VALUE_AUTORESOLVE,
            self::VALUE_ALWAYSOVERWRITE,
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
