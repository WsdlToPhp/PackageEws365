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
    const VALUE_RIGHTSPROTECTMESSAGE = 'RightsProtectMessage';
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
     * @uses self::VALUE_RIGHTSPROTECTMESSAGE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RIGHTSPROTECTMESSAGE,
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
