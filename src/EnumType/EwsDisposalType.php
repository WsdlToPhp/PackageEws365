<?php

namespace Ews\EnumType;

/**
 * This class stands for DisposalType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDisposalType
{
    /**
     * Constant for value 'HardDelete'
     * @return string 'HardDelete'
     */
    const VALUE_HARD_DELETE = 'HardDelete';
    /**
     * Constant for value 'SoftDelete'
     * @return string 'SoftDelete'
     */
    const VALUE_SOFT_DELETE = 'SoftDelete';
    /**
     * Constant for value 'MoveToDeletedItems'
     * @return string 'MoveToDeletedItems'
     */
    const VALUE_MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';
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
     * @uses self::VALUE_HARD_DELETE
     * @uses self::VALUE_SOFT_DELETE
     * @uses self::VALUE_MOVE_TO_DELETED_ITEMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HARD_DELETE,
            self::VALUE_SOFT_DELETE,
            self::VALUE_MOVE_TO_DELETED_ITEMS,
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
