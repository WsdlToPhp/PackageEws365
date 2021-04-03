<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ServiceConfigurationType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsServiceConfigurationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MailTips'
     * @return string 'MailTips'
     */
    const VALUE_MAIL_TIPS = 'MailTips';
    /**
     * Constant for value 'UnifiedMessagingConfiguration'
     * @return string 'UnifiedMessagingConfiguration'
     */
    const VALUE_UNIFIED_MESSAGING_CONFIGURATION = 'UnifiedMessagingConfiguration';
    /**
     * Constant for value 'ProtectionRules'
     * @return string 'ProtectionRules'
     */
    const VALUE_PROTECTION_RULES = 'ProtectionRules';
    /**
     * Constant for value 'PolicyNudges'
     * @return string 'PolicyNudges'
     */
    const VALUE_POLICY_NUDGES = 'PolicyNudges';
    /**
     * Return allowed values
     * @uses self::VALUE_MAIL_TIPS
     * @uses self::VALUE_UNIFIED_MESSAGING_CONFIGURATION
     * @uses self::VALUE_PROTECTION_RULES
     * @uses self::VALUE_POLICY_NUDGES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MAIL_TIPS,
            self::VALUE_UNIFIED_MESSAGING_CONFIGURATION,
            self::VALUE_PROTECTION_RULES,
            self::VALUE_POLICY_NUDGES,
        ];
    }
}
