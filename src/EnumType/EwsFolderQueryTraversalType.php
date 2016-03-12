<?php

namespace Ews\EnumType;

/**
 * This class stands for FolderQueryTraversalType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Types of sub-tree traversal for deletion and enumeration
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFolderQueryTraversalType
{
    /**
     * Constant for value 'Shallow'
     * @return string 'Shallow'
     */
    const VALUE_SHALLOW = 'Shallow';
    /**
     * Constant for value 'Deep'
     * @return string 'Deep'
     */
    const VALUE_DEEP = 'Deep';
    /**
     * Constant for value 'SoftDeleted'
     * @return string 'SoftDeleted'
     */
    const VALUE_SOFT_DELETED = 'SoftDeleted';
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
     * @uses self::VALUE_SHALLOW
     * @uses self::VALUE_DEEP
     * @uses self::VALUE_SOFT_DELETED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHALLOW,
            self::VALUE_DEEP,
            self::VALUE_SOFT_DELETED,
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
