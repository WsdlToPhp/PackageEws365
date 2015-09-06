<?php

namespace Ews\EnumType;

/**
 * This class stands for CreateActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateActionType
{
    /**
     * Constant for value 'CreateNew'
     * @return string 'CreateNew'
     */
    const VALUE_CREATENEW = 'CreateNew';
    /**
     * Constant for value 'Update'
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'UpdateOrCreate'
     * @return string 'UpdateOrCreate'
     */
    const VALUE_UPDATEORCREATE = 'UpdateOrCreate';
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
     * @uses self::VALUE_CREATENEW
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_UPDATEORCREATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATENEW,
            self::VALUE_UPDATE,
            self::VALUE_UPDATEORCREATE,
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
