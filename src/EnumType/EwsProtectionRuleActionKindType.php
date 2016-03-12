<?php

namespace Ews\EnumType;

/**
 * This class stands for ProtectionRuleActionKindType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleActionKindType
{
    /**
     * Constant for value 'RightsProtectMessage'
     * @return string 'RightsProtectMessage'
     */
    const VALUE_RIGHTS_PROTECT_MESSAGE = 'RightsProtectMessage';
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
     * @uses self::VALUE_RIGHTS_PROTECT_MESSAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RIGHTS_PROTECT_MESSAGE,
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
