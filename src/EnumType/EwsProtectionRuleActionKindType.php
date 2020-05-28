<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProtectionRuleActionKindType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleActionKindType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'RightsProtectMessage'
     * @return string 'RightsProtectMessage'
     */
    const VALUE_RIGHTS_PROTECT_MESSAGE = 'RightsProtectMessage';
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
}
