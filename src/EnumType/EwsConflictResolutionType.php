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
    const VALUE_NEVER_OVERWRITE = 'NeverOverwrite';
    /**
     * Constant for value 'AutoResolve'
     * @return string 'AutoResolve'
     */
    const VALUE_AUTO_RESOLVE = 'AutoResolve';
    /**
     * Constant for value 'AlwaysOverwrite'
     * @return string 'AlwaysOverwrite'
     */
    const VALUE_ALWAYS_OVERWRITE = 'AlwaysOverwrite';
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
     * @uses self::VALUE_NEVER_OVERWRITE
     * @uses self::VALUE_AUTO_RESOLVE
     * @uses self::VALUE_ALWAYS_OVERWRITE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEVER_OVERWRITE,
            self::VALUE_AUTO_RESOLVE,
            self::VALUE_ALWAYS_OVERWRITE,
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
