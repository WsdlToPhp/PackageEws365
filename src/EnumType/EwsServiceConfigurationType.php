<?php

namespace Ews\EnumType;

/**
 * This class stands for ServiceConfigurationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsServiceConfigurationType
{
    /**
     * Constant for value 'MailTips'
     * @return string 'MailTips'
     */
    const VALUE_MAILTIPS = 'MailTips';
    /**
     * Constant for value 'UnifiedMessagingConfiguration'
     * @return string 'UnifiedMessagingConfiguration'
     */
    const VALUE_UNIFIEDMESSAGINGCONFIGURATION = 'UnifiedMessagingConfiguration';
    /**
     * Constant for value 'ProtectionRules'
     * @return string 'ProtectionRules'
     */
    const VALUE_PROTECTIONRULES = 'ProtectionRules';
    /**
     * Constant for value 'PolicyNudges'
     * @return string 'PolicyNudges'
     */
    const VALUE_POLICYNUDGES = 'PolicyNudges';
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
     * @uses self::VALUE_MAILTIPS
     * @uses self::VALUE_UNIFIEDMESSAGINGCONFIGURATION
     * @uses self::VALUE_PROTECTIONRULES
     * @uses self::VALUE_POLICYNUDGES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MAILTIPS,
            self::VALUE_UNIFIEDMESSAGINGCONFIGURATION,
            self::VALUE_PROTECTIONRULES,
            self::VALUE_POLICYNUDGES,
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
