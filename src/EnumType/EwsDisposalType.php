<?php

namespace Ews\EnumType;

/**
 * This class stands for DisposalType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsDisposalType
{
    /**
     * Constant for value 'HardDelete'
     * @return string 'HardDelete'
     */
    const VALUE_HARDDELETE = 'HardDelete';
    /**
     * Constant for value 'SoftDelete'
     * @return string 'SoftDelete'
     */
    const VALUE_SOFTDELETE = 'SoftDelete';
    /**
     * Constant for value 'MoveToDeletedItems'
     * @return string 'MoveToDeletedItems'
     */
    const VALUE_MOVETODELETEDITEMS = 'MoveToDeletedItems';
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
     * @uses self::VALUE_HARDDELETE
     * @uses self::VALUE_SOFTDELETE
     * @uses self::VALUE_MOVETODELETEDITEMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HARDDELETE,
            self::VALUE_SOFTDELETE,
            self::VALUE_MOVETODELETEDITEMS,
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
