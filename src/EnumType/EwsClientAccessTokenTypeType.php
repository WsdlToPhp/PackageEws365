<?php

namespace Ews\EnumType;

/**
 * This class stands for ClientAccessTokenTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientAccessTokenTypeType
{
    /**
     * Constant for value 'CallerIdentity'
     * @return string 'CallerIdentity'
     */
    const VALUE_CALLERIDENTITY = 'CallerIdentity';
    /**
     * Constant for value 'ExtensionCallback'
     * @return string 'ExtensionCallback'
     */
    const VALUE_EXTENSIONCALLBACK = 'ExtensionCallback';
    /**
     * Constant for value 'ScopedToken'
     * @return string 'ScopedToken'
     */
    const VALUE_SCOPEDTOKEN = 'ScopedToken';
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
     * @uses self::VALUE_CALLERIDENTITY
     * @uses self::VALUE_EXTENSIONCALLBACK
     * @uses self::VALUE_SCOPEDTOKEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CALLERIDENTITY,
            self::VALUE_EXTENSIONCALLBACK,
            self::VALUE_SCOPEDTOKEN,
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
