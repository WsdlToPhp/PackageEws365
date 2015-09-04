<?php

namespace Ews\EnumType;

/**
 * This class stands for ItemQueryTraversalType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Types of sub-tree traversal for deletion and enumeration
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsItemQueryTraversalType
{
    /**
     * Constant for value 'Shallow'
     * @return string 'Shallow'
     */
    const VALUE_SHALLOW = 'Shallow';
    /**
     * Constant for value 'SoftDeleted'
     * @return string 'SoftDeleted'
     */
    const VALUE_SOFTDELETED = 'SoftDeleted';
    /**
     * Constant for value 'Associated'
     * @return string 'Associated'
     */
    const VALUE_ASSOCIATED = 'Associated';
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
     * @uses self::VALUE_SHALLOW
     * @uses self::VALUE_SOFTDELETED
     * @uses self::VALUE_ASSOCIATED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SHALLOW,
            self::VALUE_SOFTDELETED,
            self::VALUE_ASSOCIATED,
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
