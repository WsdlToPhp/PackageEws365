<?php

namespace Ews\EnumType;

/**
 * This class stands for ImAddressKeyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsImAddressKeyType
{
    /**
     * Constant for value 'ImAddress1'
     * @return string 'ImAddress1'
     */
    const VALUE_IMADDRESS1 = 'ImAddress1';
    /**
     * Constant for value 'ImAddress2'
     * @return string 'ImAddress2'
     */
    const VALUE_IMADDRESS2 = 'ImAddress2';
    /**
     * Constant for value 'ImAddress3'
     * @return string 'ImAddress3'
     */
    const VALUE_IMADDRESS3 = 'ImAddress3';
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
     * @uses self::VALUE_IMADDRESS1
     * @uses self::VALUE_IMADDRESS2
     * @uses self::VALUE_IMADDRESS3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IMADDRESS1,
            self::VALUE_IMADDRESS2,
            self::VALUE_IMADDRESS3,
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
